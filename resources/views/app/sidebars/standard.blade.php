<div>
    <div class="row">
        <div class="col-md-12">
            <h4><a href="{{ route( 'homepage' ) }}" class"">Home</a></h4>
        </div>
    </div>
    @guest
        <h4><a href="{{ route( 'register' ) }}" class"">Register</a></h4>
        <h4>Already a member? <a href="{{ route( 'login' ) }}" class"">Login</a></h4>
    @endguest
    @auth
        <div class="row">
            <div class="col-md-12">
                <h4>Welcome, {{ Auth::user()->getFullName() }}</h4>
                <a href="{{ route( 'logout' ) }}" onclick="event.preventDefault(); document.getElementById( 'logout-form' ).submit();" class="btn btn-danger">Logout</a>
                <form id="logout-form" action="{{ route( 'logout' ) }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    @endauth
</div>
