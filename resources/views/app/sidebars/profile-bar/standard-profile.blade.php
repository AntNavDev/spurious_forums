<div class="profile_sidebar">
    <div class="row">
        <div class="col-md-12">
            <h4><a href="{{ route( 'homepage' ) }}" class"">Home</a></h4>
        </div>
    </div>
    @guest
        <div class="row">
            <div class="col-md-12">
                <h4><a href="{{ route( 'register' ) }}" class"">Register</a></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><a href="{{ route( 'login' ) }}" class"">Login</a></h4>
            </div>
        </div>
    @endguest
    @auth
        <div class="row">
            <div class="col-md-12">
                @if( ! Auth::user()->getProfilePic() )
                    <h4><i class="fa fa-user-circle"></i> {{ Auth::user()->getFullName() }}</h4>
                @else
                    <h4><img src="{{ Auth::user()->getProfilePic() }}" class="profile_pic" /> {{ Auth::user()->getFullName() }}</h4>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>User Level: {{ ucfirst( Auth::user()->getRole() ) }}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4><i class="fa fa-cogs"></i> <a href="{{ route( 'user.index' ) }}">Settings</a></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4><a href="{{ route( 'logout' ) }}" onclick="event.preventDefault(); document.getElementById( 'logout-form' ).submit();" class="btn btn-danger">Logout</a></h4>
                <form id="logout-form" action="{{ route( 'logout' ) }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    @endauth
</div>
