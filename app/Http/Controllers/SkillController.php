<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

use Portfolio\Http\Requests\SkillCreateRequest;
use Portfolio\Http\Requests\SkillUpdateRequest;
use Portfolio\Http\Requests\SkillUploadImageRequest;

use Validator;

use Auth;



class SkillController extends Controller
{
    
    public function index()
    {   
        $active     = 1;
        $menuTipo   = 1;
        if(\Request::get('op') == "inactives"){
            $active     = 0;
            $menuTipo   = 2;
        }

        $skills     = \Portfolio\Skill::where('active', $active)
                    ->orderBy('order', 'asc')->get();

        return view('admin.skills.index')
            ->with('skills'     , $skills)
            ->with('menuTipo'   , $menuTipo); 
    }

    
    public function create()
    {
        $category     = \Portfolio\SkillCategory::where('active', 1)
                    ->orderBy('name', 'asc')->get();
        return view('admin.skills.create')->with('category', $category);
    }

    
    public function store(SkillCreateRequest $request)
    {
        //dd($request->all());
        $category = $request->get('category');
        if($category == 2){ //Other skills
            $test = explode("/", $request->get('myPhoto'));
            $image = $test[count($test)-1]; 
        }else{ //Web development
            $image = $request->get('image');
        }
        $skill              = new \Portfolio\Skill;
        $skill->name        = $request->get('name');
        $skill->description = $request->get('description');
        $skill->image       = $image;
        $skill->order       = $request->get('order');
        $skill->skill_categories_id = $category;
        $skill->users_id            = Auth::user()->id;
        $skill->save();

        $text = 'Usuario '.auth()->user()->email.' ha creado nuevo Skill: '.$request->get('name');
        LogController::createLog($text);

        return \Redirect::to('/backend/skills')->with('message', 'Skill created successfully');
    }

    
    public function show($id)
    {
        return \Redirect::to('/backend/skills');
    }

   
    public function edit($id)
    {
        $query          = array('id' => $id);
        $rules = array(
            'id'    => 'required|numeric|exists:skills,id'
            );
        $validator = Validator::make($query, $rules);
        
        if ($validator->fails()) {
            $text = 'Usuario '.auth()->user()->email.' ha tratado de acceder a un Skill que no existe ID:'.$id;
            LogController::createLog($text);

            return \Redirect::to('/backend/skills')
                ->with('messageError', 'Skill invalid');
        } else {
            $skill = \Portfolio\Skill::find($id);
            $categories     = \Portfolio\SkillCategory::where('active', 1)
                    ->orderBy('name', 'asc')->get();
            
            return view('admin.skills.edit')
                ->with('skill', $skill)->with('categories', $categories);
        }
    }

    public function update(SkillUpdateRequest $request)
    {
        //dd($request->all());

        $active = false;
        if($request->get('active') == "on") $active = true;

        $category = $request->get('category');
        if($category == 2 && $request->get('myPhoto')!==""){ //Other skills
            $test = explode("/", $request->get('myPhoto'));
            $image = $test[count($test)-1]; 
        }else{ //Web development
            $image = $request->get('image');
        }

        $skill              = \Portfolio\Skill::find($request->get('id'));
        $skill->name        = $request->get('name');
        $skill->description = $request->get('description');
        $skill->image       = $image;
        $skill->order       = $request->get('order');
        $skill->active      = $active;
        $skill->skill_categories_id = $category;
        $skill->users_id    = Auth::user()->id;
        $skill->save();

        
        $text = 'Usuario '.auth()->user()->email.' ha editado Skill: '.$skill->name.' ID: '.$skill->id;
        LogController::createLog($text);

        return \Redirect::to('/backend/skills/'.$skill->id.'/edit')
        ->with('message', 'Skill updated successfully');
    }

    public function destroy($id)
    {
        $skill              = \Portfolio\Skill::find($id);
        if($skill){
           $skill->active = 0;
           $skill->save();

        }

        return \Redirect::to('/backend/skills')->with('message', 'Skill updated successfully');
    }


    ///first upload to create preview
    public function uploadImage(SkillUploadImageRequest $request){
        
        if ($request->file('img')->isValid()) {
            $file               = $request->file('img');
            $destinationPath    = $_SERVER['DOCUMENT_ROOT'].'/images/skills/';
            $destinationPathUrl = '/images/skills/';
            $fileName           = 'filename'.date('YmdHis').'.jpg';
            
            $request->file('img')->move($destinationPath, $fileName);
            list($width, $height) = getimagesize( $destinationPath.$fileName );
        }

        $response=array(
                "status"    => "success",
                "url"       => $destinationPathUrl.$fileName,
                "width"     => $width,
                "height"    => $height
            );
        return \Response::json($response);
    }


    ///CROP THE IMAGE :/
    public function uploadImageCrop(SkillUploadImageRequest $request){
        
        $imgUrl     = $request->get('imgUrl');
        $imgUrlServer =  $_SERVER['DOCUMENT_ROOT'].$imgUrl;
        // original sizes
        $imgInitW   = $request->get('imgInitW');
        $imgInitH   = $request->get('imgInitH');
        // resized sizes
        $imgW       = $request->get('imgW');
        $imgH       = $request->get('imgH');
        // offsets
        $imgY1      = $request->get('imgY1');
        $imgX1      = $request->get('imgX1');
        // crop box
        $cropW      = $request->get('cropW');
        $cropH      = $request->get('cropH');
        // rotation angle
        $angle      = $request->get('rotation');
        $jpeg_quality       = 100;
        

        //$output_filename    = "temp/croppedImg_".rand();
        // uncomment line below to save the cropped image in the same location as the original image.

        //$output_filename = dirname($imgUrl).  "/croppedImg_".rand();
        //print_r(dirname($imgUrl));
        $output_filename = dirname($imgUrl).  "/croppedImg_".rand();

        $what = getimagesize($imgUrlServer);

        switch(strtolower($what['mime']))
        {
            case 'image/png':
                $img_r = imagecreatefrompng($imgUrlServer);
                $source_image = imagecreatefrompng($imgUrlServer);
                $type = '.png';
                break;
            case 'image/jpeg':
                $img_r = imagecreatefromjpeg($imgUrlServer);
                $source_image = imagecreatefromjpeg($imgUrlServer);
                error_log("jpg");
                $type = '.jpeg';
                break;
            case 'image/gif':
                $img_r = imagecreatefromgif($imgUrlServer);
                $source_image = imagecreatefromgif($imgUrlServer);
                $type = '.gif';
                break;
            default: die('image type not supported');
        }

        //Check write Access to Directory
        if(!is_writable(dirname($_SERVER['DOCUMENT_ROOT'].$output_filename))){
            $response = Array(
                "status" => 'error',
                "message" => 'Can`t write cropped File'
            );  
        }else{
            // resize the original image to size of editor
            $resizedImage = imagecreatetruecolor($imgW, $imgH);
            imagecopyresampled($resizedImage, $source_image, 0, 0, 0, 0, $imgW, $imgH, $imgInitW, $imgInitH);
            // rotate the rezized image
            $rotated_image = imagerotate($resizedImage, -$angle, 0);
            // find new width & height of rotated image
            $rotated_width = imagesx($rotated_image);
            $rotated_height = imagesy($rotated_image);
            // diff between rotated & original sizes
            $dx = $rotated_width - $imgW;
            $dy = $rotated_height - $imgH;
            // crop rotated image to fit into original rezized rectangle
            $cropped_rotated_image = imagecreatetruecolor($imgW, $imgH);
            imagecolortransparent($cropped_rotated_image, imagecolorallocate($cropped_rotated_image, 0, 0, 0));
            imagecopyresampled($cropped_rotated_image, $rotated_image, 0, 0, $dx / 2, $dy / 2, $imgW, $imgH, $imgW, $imgH);
            // crop image into selected area
            $final_image = imagecreatetruecolor($cropW, $cropH);
            imagecolortransparent($final_image, imagecolorallocate($final_image, 0, 0, 0));
            imagecopyresampled($final_image, $cropped_rotated_image, 0, 0, $imgX1, $imgY1, $cropW, $cropH, $cropW, $cropH);
            // finally output png image
            //imagepng($final_image, $output_filename.$type, $png_quality);
            imagejpeg($final_image, $_SERVER['DOCUMENT_ROOT'].$output_filename.$type, $jpeg_quality);
            $response = Array(
                "status" => 'success',
                "url" => $output_filename.$type
            );
        }
        return \Response::json($response);


        $response=array(
                "status"=>"success",
                "url"=>$destinationPathUrl.$fileName
            );
        return \Response::json($response);
    }
}
