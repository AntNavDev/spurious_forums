<link href="{{ asset('css/comments.css') }}" rel="stylesheet">
<div class="thread_comments">       
    @auth
        @if( $comment->author == Auth::user()->id )
            <button type="submit" form="update_comment_{{ $index }}" class="btn edit_comment_button"><i class="fa fa-pencil-square-o" aria-hidden="true"> edit</i></button>
            <form action="{{ route( 'comment.destroy', $comment ) }}" method="POST" style="display: inline-block;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn delete_comment_button" onclick="return confirm( 'Remove comment? Press \'ok\' to continue.' )">&times;</button>
            </form>
        @endif
    @endauth
    
    <form id="update_comment_{{ $index }}" action="{{ route( 'comment.update', $comment ) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div contenteditable="false" name="comment" class="comment_style">{!! $comment->description !!}</div>
        <input type="hidden" class="comment_value" name="comment_{{ $index }}" value="{{ $comment->description }}">
        <input type="hidden" name="comment_index" value="{{ $index }}" ><br>
        Posted by: {{ User::getUsernameFromId( $comment->author ) }}
    </form>
</div>
