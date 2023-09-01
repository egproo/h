<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')- {{ config('app.name') }}</title>
        <meta name="keywords" content="​@yield('keywords')">
        <meta name="description" content="@yield('description')">

        <style>[x-cloak] { display: none !important; }</style>
 <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}[x-cloak] {display: none;}</style>

		<link rel="stylesheet" href="{{ url('/')}}/css/style.css?ver=10.10.10.09" media="screen">
		<script class="u-script" type="text/javascript" src="{{ url('/')}}/js/jquery.js?ver=10.10.10.09" defer=""></script>
		<script class="u-script" type="text/javascript" src="{{ url('/')}}/js/main.js?ver=10.10.10.09" defer=""></script>	
		<meta property="og:title" content="@yield('title') - {{ config('app.name') }}">
		<meta property="og:description" content="@yield('description')">
		<meta property="og:image"
		content="{{ url('/')}}/images/d4a65ca58c7d2043900b53825fc98c1802d55f938e0fef476e3a209e750b95d9e5d95295fcdf3fb52b83665bde5c1a91c113c9765a13bb33510e76_1280.jpg">
		<link rel="icon" href="{{ url('/')}}/images/Harees-Final.png">
		<link id="u-theme-google-font" rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
		<link id="u-page-google-font" rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Almarai:300,400,700,800">


		<script type="application/ld+json">{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "haris"
		}</script>
		<meta name="theme-color" content="#478ac9">
		<meta property="og:type" content="website">

    <script src="{{ url('/')}}/livewire/livewire.js?id=11c49d7e"   data-csrf="btuuliakPOg4uJoM93xSeSeIneiCKSjsGjj5YE2v" data-uri="/livewire/update" data-navigate-once="true"></script>
		@livewire('notifications')
    </head>

<body data-home-page="{{ url('/')}}/" data-home-page-title="{{ config('app.name') }}" class="u-body u-xl-mode" data-lang="ar">
    @include('includes.header')	
	@include('includes.loading')	
    @yield('content')


	<script src="//unpkg.com/alpinejs" defer></script>
	
	@include('includes.footer')	
    </body>
</html>