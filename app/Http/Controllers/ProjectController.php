<?php

namespace Portfolio\Http\Controllers;

use Illuminate\Http\Request;

use Portfolio\Http\Requests;

use Portfolio\Http\Requests\ProjectCreateRequest;
//use Portfolio\Http\Requests\SkillUpdateRequest;
use Portfolio\Http\Requests\ProjectUploadImageRequest;

use Validator;

use Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $active     = 1;
        $menuTipo   = 1;
        if(\Request::get('op') == "inactives"){
            $active     = 0;
            $menuTipo   = 2;
        }

        $projects     = \Portfolio\Project::where('active', $active)
                    ->orderBy('order', 'asc')->get();

        

        return view('admin.projects.index')
            ->with('projects'       , $projects)
            ->with('menuTipo'       , $menuTipo); 
    }

    public function create()
    {
        $skills     = \Portfolio\Skill::where('active', 1)
                    ->orderBy('name', 'asc')->get();
        return view('admin.projects.create')->with('skills', $skills);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCreateRequest $request)
    {
        //dd($request->all());
        //
        $finished = false;
        if($request->get('finished') == "on") $finished = true;

        $home = false;
        if($request->get('home') == "on") $home = true;

        $available = false;
        if($request->get('available') == "on") $available = true;

        $link = false;
        if($request->get('link')!= null) $link = $request->get('link');

        $test   = explode("/", $request->get('myPhoto'));
        $image  = $test[count($test)-1]; 

        $project              = new \Portfolio\Project;
        $project->name        = $request->get('name');
        $project->client      = $request->get('client');
        $project->description = $request->get('description');
        $project->image       = $image;
        $project->link        = $link;
        $project->home        = $home;
        $project->finished    = $finished;
        $project->link_available   = $available;
        $project->order       = $request->get('order');
        $project->users_id    = Auth::user()->id;
        $project->save();

        $skills = $request->get('skills');

        $actualSkills = \DB::table('projects_has_skills')->where('projects_id', '=', $project->id)->delete();

        foreach($skills as $skill=>$value){
            \DB::table('projects_has_skills')->insert(
                ['projects_id' => $project->id, 'skills_id' => $value]
            );
        }

        $text = 'Usuario '.auth()->user()->email.' ha creado nuevo Project/Portfolio: '.$request->get('name');
        LogController::createLog($text);

        return \Redirect::to('/backend/projects')->with('message', 'Project created successfully');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $query          = array('id' => $id);
        $rules = array(
            'id'    => 'required|numeric|exists:projects,id'
            );
        $validator = Validator::make($query, $rules);
        
        if ($validator->fails()) {
            $text = 'Usuario '.auth()->user()->email.' ha tratado de acceder a un Projecto que no existe ID:'.$id;
            LogController::createLog($text);

            return \Redirect::to('/backend/projects')
                ->with('messageError', 'Project invalid');
        } else {
            $project = \Portfolio\Project::find($id);
            $test  = \DB::table('projects_has_skills')
                        ->where('projects_id', $project->id)
                        ->get();
            $skillsProject = array();
            foreach($test as $t){
                $skillsProject[] = $t->skills_id;    
            }

            $skills     = \Portfolio\Skill::where('active', 1)
                    ->orderBy('name', 'asc')->get();
            
            return view('admin.projects.edit')
                ->with('project', $project)
                ->with('skills', $skills)
                ->with('skillsProject', $skillsProject);
        }
    }

    public function update(Request $request, $id)
    {
        $finished = false;
        if($request->get('finished') == "on") $finished = true;

        $link = '';
        if($request->get('link')!= null) $link = $request->get('link');

        $home = false;
        if($request->get('home') == "on") $home = true;

        $available = false;
        if($request->get('available') == "on") $available = true;

        if($request->get('myPhoto') != null){
            $test   = explode("/", $request->get('myPhoto'));
            $image  = $test[count($test)-1]; 
        }else{
            $image  = $request->get('image');
        }
        $project              = \Portfolio\Project::find($request->get('id'));
        $project->name        = $request->get('name');
        $project->client      = $request->get('client');
        $project->description = $request->get('description');
        $project->image       = $image;
        $project->link        = $link;
        $project->finished    = $finished;
        $project->home        = $home;
        $project->link_available   = $available;
        $project->order       = $request->get('order');
        $project->users_id    = Auth::user()->id;
        $project->save();


        $skills = $request->get('skills');

        $actualSkills = \DB::table('projects_has_skills')->where('projects_id', '=', $project->id)->delete();

        foreach($skills as $skill=>$value){
            \DB::table('projects_has_skills')->insert(
                ['projects_id' => $project->id, 'skills_id' => $value]
            );
        }

        $text = 'Usuario '.auth()->user()->email.' ha editado Projecto "'.$project->name.'" ID:'.$project->id;
        LogController::createLog($text);

        return \Redirect::to('/backend/projects/'.$project->id.'/edit')
                    ->with('message', 'Project updated successfully');
    }

    public function destroy($id)
    {
        //
    }



    ///first upload to create preview
    public function uploadImage(ProjectUploadImageRequest $request){
        
        if ($request->file('img')->isValid()) {
            $file               = $request->file('img');
            $destinationPath    = $_SERVER['DOCUMENT_ROOT'].'/images/portfolio/';
            $destinationPathUrl = '/images/portfolio/';
            $fileName           = 'Upload_porftolio_carlos_castillo_'.date('YmdHis').'.jpg';
            
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
    public function uploadImageCrop(ProjectUploadImageRequest $request){
        
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
        $output_filename = dirname($imgUrl).  "/porftolio_carlos_castillo_".rand();

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
