@extends( 'app.shell' )

@section( 'title-bar' )
    <link href="{{ asset('css/comments.css') }}" rel="stylesheet">
    <link href="{{ asset('css/thread.css') }}" rel="stylesheet">
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
        @include( 'comment.index' )
    @endforeach
@endsection
