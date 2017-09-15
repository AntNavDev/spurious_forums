<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- Bootstrap -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    <title>{{ config( 'app.name' ) }}</title>
</head>

<body>
    <h3 class="homepage-header">Welcome to Spurious Forums!</h3>
    @yield( 'content' )


</body>
</html>
