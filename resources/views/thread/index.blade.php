@extends( 'app.shell' )

@section( 'title-bar' )
    <link href="{{ asset('css/comments.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset( 'js/edit-comment.js' ) }}"></script>
    <div class="row">
        <div id="title_bar" class="col-md-12">
            <h3 class="title_bar">{{ $thread->title }}</h3>
        </div>
    </div>
    <div  class="row">
        <div id="thread_description" class="col-md-12 thread_description">
            {{ $thread->description }}
        </div>
    </div>
@endsection

@section( 'content' )
    @auth
        @include( 'comment.create', $thread )
    @endauth
    @foreach( $comments as $index => $comment )
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
                <div contentEditable="false" name="comment" class="comment_style">{{ $comment->description }}</div>
                <input type="hidden" class="comment_value" name="comment_{{ $index }}" value="{{ $comment->description }}">
                <input type="hidden" name="comment_index" value="{{ $index }}" ><br>
                Posted by: {{ User::getUsernameFromId( $comment->author ) }}
            </form>
        </div>
    @endforeach
@endsection
