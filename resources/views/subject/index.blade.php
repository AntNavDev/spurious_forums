@extends( 'app.shell' )

@section( 'title-bar' )
    <div id="title_bar" class="col-md-12">
        <h3 class="title-bar">{{ $subject->title }}</h3>
    </div>
@endsection

@section( 'content' )
    @foreach( $threads as $thread )
        <a href="">
            <div class="subject_threads">
                <h4 class="thread_title">{{ $thread->title }}</h4>
                {{ $thread->description }}
            </div>
        </a>
    @endforeach
@endsection
