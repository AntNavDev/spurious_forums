@extends( 'app.shell' )

@section( 'title-bar' )
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
    @foreach( $comments as $comment )
        <div class="thread_comments">
            <h4 class="subject_title">'{{ $comment->description }}'</h4>
            Posted by: {{ User::getNameFromId( $comment->author ) }}
            @auth
                @if( $comment->author == Auth::user()->id )
                    <a href="{{ route( 'comment.edit', $comment ) }}" class="btn edit_comment_button"><i class="fa fa-pencil-square-o" aria-hidden="true">edit</i></a>
                    <form action="{{ route( 'comment.destroy', $comment ) }}" method="POST" style="display: inline-block;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn delete_comment_button" onclick="return confirm( 'Remove comment? Press \'ok\' to continue.' )">&times;</button>
                    </form>
                @endif
            @endauth
        </div>
    @endforeach
    @auth
        @include( 'comment.create', $thread )
    @endauth
@endsection
