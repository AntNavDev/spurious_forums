@extends( 'app.shell' )

@section( 'title-bar' )
    <div id="title_bar" class="col-md-12">
        <h3 class="title-bar">Welcome to Spurious Forums!</h3>
    </div>
@endsection

@section( 'content' )
    @foreach( $subjects as $subject )
            <a href="{{ route( 'subject.myThreads', $subject ) }}">
                <div class="homepage_subjects">
                    <h4 class="subject_title">{{ $subject->title }}</h4>
                    {{ $subject->description }}
                </div>
            </a>
    @endforeach

@endsection
