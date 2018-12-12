<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Home Horizon') }}</title>
        <meta property="og:site_name" content="{{ config('app.name', 'Home Horizon') }}" />
		<meta property="og:locale" content="{{ config('app.locale', 'fr').'_'. config(strtoupper('app.locale'), 'FR')}}" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="{{ config('app.name', 'Home Horizon') }} - Agence immobiliere Jette Belgique - Agence immobiliere Jette België - Agence immobiliere Jette Belgium" />
		<meta property="og:description" content="{{ config('app.name', 'Home Horizon') }} - Agence immobilière professionnelle à taille humaine, flexible, prodiguant des conseils personnalisés et offrant un service de qualité en toute confiance." />
		<meta property="og:url" content="http://homehorizon.be" />
		<meta property="og:image" content="http://homehorizon.be/images/banners/facade-bg.jpg" />
		<meta property="og:image:width" content="1150" />
		<meta property="og:image:height" content="500" />
		<meta property="og:image:type" content="image/jpeg" />
		
		<link href="{{ URL::to('favicon.ico') }}" rel="shortcut icon" type="image/x-icon"/>
		<link href="{{ URL::to('favicon.ico') }}" rel="icon" type="image/x-icon"/>

		<!-- Css -->
		<link href="{{ URL::to('css/nivo-slider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/owl.theme.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="{{ URL::to('css/style.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ URL::to('css/responsive.css') }}" rel="stylesheet" type="text/css" />

		@yield('css')

    </head>
	<body>

		<!-- Header Start
	    ================================================== -->
		@include('common.header')
		
		<!-- MENU Start
	    ================================================== -->
	    @include('common.nav')

	    <!-- BREADCRUMB Start
	    ================================================== -->
	    @yield('breadcrumb')

	    <!-- BANNER CONTENT Start 
	    ================================================== -->
		@yield('banner')

		<!-- CONTENT Start
	    ================================================== -->
	    @yield('content')
		
		<!-- FOOTER Start
	    ================================================== -->
	    @include('common.footer')

	    <!-- SCRIPTS Start
	    ================================================== -->
	    <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
	    <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
	    <script type="text/javascript" src="{{ URL::to('js/jquery.nivo.slider.js') }}"></script>
	    <script type="text/javascript" src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
	    <script type="text/javascript" src="{{ URL::to('js/jquery.nicescroll.js') }}"></script>
	    <script type="text/javascript" src="{{ URL::to('js/jquery.scrollUp.min.js') }}"></script>

		@yield('scripts')

	</body>
</html>