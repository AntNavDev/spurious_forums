@extends( 'app.shell' )

@section( 'title-bar' )
<link href="{{ asset('css/create-thread.css') }}" rel="stylesheet">
    <div id="title_bar" class="col-md-12">
        <h3 class="title_bar">Create a thread for {{ $subject->title }}!</h3>
    </div>
@endsection

@section( 'content' )
    <form action="{{ route( 'thread.store' ) }}" method="POST">
        {{ csrf_field() }}
        <div class="align_center post_thread">
            <input type="hidden" id="subject_id" name="subject_id" value="{{ $subject->id }}">
            <input type="hidden" id="author_id" name="author_id" value="{{ Auth::user()->id }}">
            <label for="thread_title">
                Title<br>
                <input type="text" id="thread_title" name="thread_title" required>
            </label><br>
            <label for="thread_description">
                Description<br>
                <textarea id="thread_description" name="thread_description" required></textarea>
            </label><br>
            <button type="submit" id="thread_post_button" class="btn btn-success">Post Thread</button>
        </div>
    </form>
@endsection
