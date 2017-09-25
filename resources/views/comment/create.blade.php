<div id="add_comment">
    <form action="{{ route( 'comment.store' ) }}" method="POST">
        {{ csrf_field() }}
        <textarea name="description" class="comment_description"></textarea><br>
        <input type="hidden" name="thread_id" value="{{ $thread->id }}">
        <input type="hidden" name="author" value="{{ Auth::user()->id }}">
        <button class="btn btn-success">Post Comment</button>
    </form>
</div>
