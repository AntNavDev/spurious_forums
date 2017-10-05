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
    <div id="profile_image" class="profile_div_spacing">
        <img src="{{ Auth::user()->getProfilePic() }}" class="edit_profile_pic" >
    </div>
    <div id="profile_email" class="profile_div_spacing">
        {{ Auth::user()->getEmail() }}
    </div>
    <div id="profile_first_name" class="profile_div_spacing">
        {{ Auth::user()->getFirstName() }}
    </div>
    <div id="profile_last_name" class="profile_div_spacing">
        {{ Auth::user()->getLastName() }}
    </div>
    <div id="go_edit_profile">
        <a href="{{ route( 'user.edit', Auth::user() ) }}" class="btn btn-info">Edit Profile</a>
    </div>
@endsection
