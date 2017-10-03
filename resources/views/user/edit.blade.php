@extends( 'app.shell' )

@section( 'title-bar' )
    <link href="{{ asset('css/profile-page.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset( 'js/profile-page.js' ) }}"></script>
    <div class="row">
        <div id="title_bar" class="col-md-12">
            <h3 class="title_bar">{{ Auth::user()->getFirstName() }}'s Profile</h3>
        </div>
    </div>
@endsection

@section( 'content' )
    <div id="profile_image">
        <img src="{{ Auth::user()->getProfilePic() }}" class="profile_page" >
    </div>
@endsection
