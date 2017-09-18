<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- Bootstrap -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    <title>{{ config( 'app.name' ) }}</title>
</head>

<body>
    <div class="row">
        <div id="title_bar" class="col-md-12">
            <h3 class="homepage-header">Welcome to Spurious Forums!</h3>
        </div>
    </div>
    <div class="row">
        <div id="homepage_sidebar" class="col-md-2">
            @include( 'homepage.sidebars.standard' )
        </div>
        <div id="subject_content" class="col-md-10">
            @yield( 'content' )
        </div>
    </div>

</body>
</html>
