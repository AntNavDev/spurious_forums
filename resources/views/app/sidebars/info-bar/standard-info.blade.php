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
        <a href="{{ route( 'thread.create', $subject ) }}" id="create_thread_button" class="btn btn-success">New Thread</a>
    </div>
@endif
