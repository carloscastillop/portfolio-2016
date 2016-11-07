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
$setting_data['smsUser']  		= env('SMSUSER'); //Config::get('settings.smsUser')
$setting_data['smsPassword']  	= env('SMSPASSWORD'); //Config::get('settings.smsPassword')

/////CV REQUEST
$setting_data['emailCopia']  	= "info@carloscastillo.cl"; //Config::get('settings.emailCopia')
$setting_data['nombreCopia']  	= "Carlos Castillo"; //Config::get('settings.nombreCopia')

/////CHAT
//$setting_data['elChat'] = Chat::find(1); //Config::get('settings.elChat')

return $setting_data;
