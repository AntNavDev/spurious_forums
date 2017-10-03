@if( Request::is( 'subject/*' ) )
    <div class="info_bar">
        @if( isset( $subject->moderators ) )
        <h3>Moderators</h3>
        <div class="moderator_box">
        @foreach( $subject->moderators as $mod )
            {{ User::getNameFromId( $mod ) }}<br>
        @endforeach
        </div>
        @endif
    </div>

    <div class="info_bar">
        <a href="{{ route( 'subject.create', $subject ) }}" id="create_post" class="btn btn-success">New Post</a>
    </div>
@endif
