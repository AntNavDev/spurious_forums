@extends( 'app.shell' )

@section( 'title-bar' )
    <link href="{{ asset('css/profile-page.css') }}" rel="stylesheet">
    <div class="row">
        <div id="title_bar" class="col-md-12">
            <h3 class="title_bar">{{ Auth::user()->getFirstName() }}'s Profile</h3>
        </div>
    </div>
@endsection

@section( 'content' )
    <img src="{{ Auth::user()->getProfilePic() }}" class="profile_page" >
@endsection
