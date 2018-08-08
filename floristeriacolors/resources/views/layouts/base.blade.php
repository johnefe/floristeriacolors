<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Rosas Don Victorio, la mejor Floristeria en la Ciudad de Pasto, Regalos con amor, Flores con amor</title>
        <link rel="icon" href="/img/favicon.ico" />
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />       
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
          <meta content="text/javascript" http-equiv="Content-Script-Type" />
          <meta content="text/css" http-equiv="Content-Style-Type" />
          <meta id="MetaKeywords" name="KEYWORDS" content="Floristeria, rosas, ramos, flores, pasto, negocio, peluches, osos, claveles, margaritas, pagos, onlines" />
          <meta id="MetaCopyright" name="COPYRIGHT" content="Copyright 2016 by Jhon Frey Diaz Web Developmen" />
          <meta id="MetaGenerator" name="GENERATOR" content="Floristeria, rosas, ramos, vino, flores, pasto, negocio, peluches, osos, claveles, margaritas, pagos, online" />
          <meta id="MetaAuthor" name="AUTHOR" content="Rosas Don Victorio" />
          <meta name="RESOURCE-TYPE" content="DOCUMENT" />
          <meta name="DISTRIBUTION" content="GLOBAL" />
          <meta id="MetaRobots" name="ROBOTS" content="INDEX, FOLLOW" />
          <meta name="REVISIT-AFTER" content="1 DAYS" />
          <meta name="RATING" content="GENERAL" />
          <meta http-equiv="PAGE-ENTER" content="RevealTrans(Duration=0,Transition=1)" />
          <meta name="description" content="Rosas don Victorio, la mejor Floristeria de la ciudad de Pasto. Ofrecemos al público ramos de flores, recoraciones para toda ocasion a un buen precio y una excelente calidad." />
          <meta property="og:title" content="Rosas Don Victorio"/>
          <meta property="og:site_name" content="Rosas Don Victorio"/>
          <meta property="og:image" content="http://www.rosasdonvictorio.com/img/logo.jpeg"/>
          <meta property="og:type" content="website" />
          <meta content="Rosas don Victorio, la mejor Floristeria de la ciudad de Pasto. Ofrecemos al público ramos de flores, recoraciones para toda ocasion a un buen precio y una excelente calidad." property="og:description" />
          <meta property="description" content="Rosas don Victorio, la mejor Floristeria de la ciudad de Pasto. Ofrecemos al público ramos de flores, recoraciones para toda ocasion a un buen precio y una excelente calidad." />
          <meta name="keywords" content="Floristeria, rosas, ramos, flores, pasto, negocio, peluches, osos, claveles, margaritas, pagos, online" />
          <meta name="google" content="nositelinkssearchbox" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script src="https://use.fontawesome.com/74edfe93a4.js"></script>
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};

            
         </script>
        
        @include('layouts.head_css')

    </head>
    
    
    <body id="body">
        @include('layouts.header')

        <!--separador -->
        <div class="separador">
    
        </div>
        <!--fin separador -->
        @yield('content')

        
        @include('layouts.puntoscompra')
        @include('layouts.seccion2')      
        @include('layouts.footer')

        @include('layouts.script')
    </body>


