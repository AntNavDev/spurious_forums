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
    <form action="{{ route( 'user.update', Auth::user() ) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field( 'PUT' ) }}
        <div id="profile_image" class="profile_div_spacing">
            <img src="{{ Auth::user()->getProfilePic() }}" class="edit_profile_pic" >
        </div>
        <div id="profile_email" class="profile_div_spacing">
            <input id="email_input" name="email_input" type="text" value="{{ Auth::user()->getEmail() }}" >
        </div>
        <div id="profile_first_name" class="profile_div_spacing">
            <input id="first_name_input" name="first_name_input" type="text" value="{{ Auth::user()->getFirstName() }}" >
        </div>
        <div id="profile_last_name" class="profile_div_spacing">
            <input id="last_name_input" name="last_name_input" type="text" value="{{ Auth::user()->getLastName() }}" >
        </div>
        <div id="save_edit_profile">
            <button class="btn btn-success">Save Settings</button>
        </div>
    </form>
@endsection
