<!doctype html>
<html lang="{{ app()->getLocale() }}">

<!-- Bootstrap -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- jQuery CDN -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<!-- jQuery UI -->
<script
  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
  crossorigin="anonymous"></script>

<head>
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset( 'css/font-awesome-4.7.0/css/font-awesome.css' ) }}">
    <title>{{ config( 'app.name' ) }}</title>
</head>

<body>
    <div class="row">

        <div id="homepage_sidebar" class="col-md-2 sidebar">
            @include( 'app.sidebars.profile-bar.standard-profile' )
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
            @include( 'app.sidebars.info-bar.standard-info' )
        </div>

    </div>

</body>
</html>
