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
            Posted by: {{ $comment->author }}
        </div>
    @endforeach
    @include( 'comment.create', $thread )
@endsection
