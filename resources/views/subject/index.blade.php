@extends( 'app.shell' )

@section( 'title-bar' )
    <div id="title_bar" class="col-md-12">
        <h3 class="title_bar">{{ $subject->title }}</h3>
    </div>
@endsection

@section( 'content' )
    @if( ! empty( $threads ) )
        @foreach( $threads as $thread )
            <a href="{{ route( 'thread.myComments', $thread ) }}">
                <div class="subject_threads">
                    <h4 class="thread_title">{{ $thread->title }}</h4>
                    {{ $thread->description }}
                    <h6 class="align_right">Created by: {{ User::getUsernameFromId( $thread->author ) }}</h6>
                </div>
            </a>
        @endforeach
    @endif
@endsection
