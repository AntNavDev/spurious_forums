@extends( 'app.shell' )

@section( 'content' )
    @foreach( $subjects as $subject )
        <div class="homepage_subjects">
            <h4 class="subject_title">{{ $subject->title }}</h4>
            {{ $subject->description }}
        </div>
    @endforeach

@endsection
