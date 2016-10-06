<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php 
    if(!isset($metaTitle))      $metaTitle="";
    if(!isset($metaContent))    $metaContent="";
    ?>
    <title>{{ $metaTitle }} | {{ Config::get('settings.sitename') }}</title>    
    <meta name="title" content="{{ $metaTitle }} | {{ Config::get('settings.sitename') }}">
    <meta name="DC.title" content="{{ $metaTitle }} | {{ Config::get('settings.sitename') }}">
    <meta property="og:title" content="{{ $metaTitle }} | {{ Config::get('settings.sitename') }}">
    <meta name="description" content="{{ $metaContent }}">
    <meta http-equiv="DC.Description" content="{{ $metaContent }}">
    <meta property="og:description" content="{{ $metaContent }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{{ isset($metakeywords) ? $metakeywords : Config::get('settings.metakeywords').', '.$metaTitle }}}">
    <meta property="og:image" content="{{ URL::to('/img/og-image.jpg') }}"/>
    <meta name="resource-type" content="document">
    <meta name="revisit-after" content="7 days">
    <meta name="classification" content="Business">
    <meta name="GOOGLEBOT" content="index follow">
    <meta http-equiv="CACHE-CONTROL" content="no-cache,no-store,must-revalidate">
    <meta name="audience" content="all">
    <meta name="robots" content="ALL">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="copyright" content="(r) {{ Config::get('settings.sitename') }}">
    <meta name="author" content="{{ Config::get('settings.sitename') }}">
    <meta name="language" content="sp">
    <meta name="doc-type" content="Public">
    <meta name="doc-class" content="Completed">
    <meta name="doc-rights" content="{{ Config::get('settings.sitename') }}">
    <meta name="doc-publisher" content="{{ Config::get('settings.sitename') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="canonical" href="{{ URL::to('/') }}/{{ Request::path() }}">
    <meta property="og:url" content="{{ URL::to('/') }}/{{ Request::path() }}">
    <meta property="og:site_name" content="{{ Config::get('settings.sitename') }}">

    <!-- Favicon -->
    <link rel="manifest" href="{{ URL::to('icons/manifest.json') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::to('icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::to('icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::to('icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::to('icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::to('icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::to('icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::to('icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::to('icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('icons/favicon-16x16.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::to('icons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    
    <!-- My theme -->
    <link rel="stylesheet" href="{{ URL::to('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-lumen.css') }}" media="screen">
    <link rel="stylesheet" href="{{ URL::to('css/custom.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/style-a.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/slick-theme.css') }}"/>
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">

    <link rel="stylesheet" type="text/css" href="{{ URL::to('js/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" media="screen" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ URL::to('/bower_components/html5shiv/dist/html5shiv.js') }}"></script>
      <script src="{{ URL::to('/bower_components/respond/dest/respond.min.js') }}"></script>
    <![endif]-->
    @if(Request::is('portfolio*'))

    @endif

</head>
<body class="loading">