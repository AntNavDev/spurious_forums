<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- Bootstrap -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    <title>{{ config( 'app.name' ) }}</title>
</head>

<body>
    <div class="row">
        @yield( 'title-bar' )
    </div>
    <div class="row">
        <div id="homepage_sidebar" class="col-md-2">
            @include( 'app.sidebars.standard' )
        </div>
        <div id="subject_content" class="col-md-10">
            @yield( 'content' )
        </div>
    </div>

</body>
</html>
