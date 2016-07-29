<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MANES</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- ICON STROKE -->
    <link href="{{ asset('css/icon-stroke.css') }}" rel="stylesheet">
    <!-- MENU -->
    <link rel="stylesheet" href="{{ asset('css/menuzord.css') }}">
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- Portfolio Filter -->
    <link rel="stylesheet" href="{{ asset('css/bootFolio.css') }}">
    <!-- Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Default Theme -->
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <!-- JQUERY UI STYLE -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- MAIN STYLE -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>

    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')
</head>
<body>

@include('sections.header')

@yield('content')

@include('sections.footer')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Include owl-carousel js plugin -->
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/menuzord.js') }}"></script>
<script src="{{ asset('js/countdown.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('js/jquery.bootFolio.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/rev-slider.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@yield('js')

</body>
</html>