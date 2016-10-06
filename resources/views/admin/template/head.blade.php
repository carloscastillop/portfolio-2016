<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin">
    <meta name="author" content="ccastillo@itdchile.cl">

    <title>{{ isset($seoTitle) ? $seoTitle : 'Admin' }} | {{ Config::get('settings.sitename') }}</title>

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::to('/') }}/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::to('/') }}/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ URL::to('/') }}/admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL::to('/') }}/admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Alertify CSS -->
    <link href="{{ URL::to('/') }}/admin/alertify.core.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/admin/alertify.default.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="{{ URL::to('/') }}/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ URL::to('/') }}/admin/bower_components/datatables-responsive/css/responsive.dataTables.scss" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::to('/') }}/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="{{ URL::to('/') }}/admin/estilos.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>