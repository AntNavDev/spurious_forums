<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- Bootstrap -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset( 'css/font-awesome-4.7.0/css/font-awesome.css' ) }}">
    <title>{{ config( 'app.name' ) }}</title>
</head>

<body>
    <div class="row">

        <div id="homepage_sidebar" class="col-md-2 sidebar">
            @include( 'app.sidebars.standard' )
        </div>
        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    @yield( 'title-bar' )
                </div>
            </div>

            <div class="row">
                <div id="subject_content" class="col-md-12">
                    @yield( 'content' )
                </div>
            </div>

        </div>

        <div class="col-md-2">
        </div>

    </div>

</body>
</html>
