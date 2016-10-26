<?php
date_default_timezone_set('America/Santiago');

//{{ Config::get('settings.sitename') }} 

$setting_data['sitename'] 		= "Carlos Castillo - Web developer";
$setting_data['description'] 	= "Web developer, PHP & Front-end"; //{{ Config::get('settings.description') }} 
$setting_data['keywords'] 		= "web, developer, web developer, fron end, front end developer, front-end, front-end developer, developer, web site, site, app, web app"; //{{ Config::get('settings.keywords') }} 
$setting_data['slogan'] 		= "Always creating...";
$setting_data['siteUrl'] 		= 'http://www.carloscastillo.cl/';
$setting_data['author'] 		= 'Carlos Castillo - carloscastillo.cl';

/////SOCIALES

$setting_data['linkedin'] 	= 'https://www.linkedin.com/in/carlos-castillo-pardo-92a391129';
$setting_data['facebook'] 	= 'https://www.facebook.com/carloscastillop';
$setting_data['twitter'] 	= 'https://twitter.com/ccastillocl';
$setting_data['git'] 		= 'https://gitlab.com/carloscastillop ';
$setting_data['skype'] 		= 'carloscastillop';


//////DATOS CONTACTO
$setting_data['contactoDireccion']  ='Carretera General San Martín km10, local B-14, Colina, Chicureo, Santiago, Chile'; //{{ Config::get('settings.contactoDireccion') }}
$setting_data['contactoFono']  	='+56 2123 4567'; //{{ Config::get('settings.contactoFono') }}
$setting_data['contactoEmail']  ='info@candyspot.cl'; //{{ Config::get('settings.contactoEmail') }}

$setting_data['contactoEmailTo']  	='info@candyspot.cl';
$setting_data['contactoNameTo']  	="CandySpot";


//////ARCHIVOS
$setting_data['maxUploadTxt']  	='2MB';
$setting_data['anchoFoto']  	= 640; //Config::get('settings.anchoFoto')
$setting_data['altoFoto']  		= 480; //Config::get('settings.altoFoto')
$setting_data['maxUpload']  	='2000';
$setting_data['uploadFolder']  	=$_SERVER["DOCUMENT_ROOT"];
$setting_data['uploadImagesProducts']  ="/uploads/products/";

////USER
$setting_data['uploadCV']  		="/uploads/"; //Config::get('settings.uploadCV')

////SMS
$setting_data['smsUser']  		= "carloscastillo"; //Config::get('settings.smsUser')
$setting_data['smsPassword']  	= "carloscastillopardo"; //Config::get('settings.smsPassword')

/////CV REQUEST
$setting_data['emailCopia']  	= "info@carloscastillo.cl"; //Config::get('settings.emailCopia')
$setting_data['nombreCopia']  	= "Carlos Castillo"; //Config::get('settings.nombreCopia')

/////CHAT
//$setting_data['elChat'] = Chat::find(1); //Config::get('settings.elChat')

return $setting_data;
