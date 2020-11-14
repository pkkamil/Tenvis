<article id="comments">
    <h3 class="title">Comments</h3>
    @if (count($post -> comments) == 0)
        <span class="noComments">
            <h4>There are no comments.</h4>
            <h5>Write a comment and it will appear here.</h5>
        </span>
    @endif
    @foreach ($post -> comments as $comment)
        <span class="single-comment">
        <a href="{{ url('/profile/'.$comment -> user_id) }}"><img src="{{ $comment -> user -> avatar }}" class="avatar" />
            <span class="name">{{ $comment -> user -> name }}</span></a>
            <span class="wrote">wrote:</span>
            @if (Auth::id() == $comment -> user_id or Auth::id() == $post -> user_id or Auth::user() -> role == 'Admin')
            <a href="{{ url('/comments/'.$comment -> id.'/delete') }}"><i class="fas fa-times"></i></a>
            @endif
            <span class="comment-content">
                {{$comment -> content}}
                <span
                    class="written_at">{{$comment -> updated_at -> format('d M Y')}}&nbsp;{{$comment -> updated_at -> format('H:m:s')}}</span>
            </span>
        </span>
        <hr />
    @endforeach
    <section class="writeComment" data-aos="fade-up">
        <h3 class="title">Write your opinion!</h3>
    <form action="{{ route('addComment') }}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{$post -> id}}" >
            <textarea name="message" id="message"
                placeholder="Whether it is the mob on the street, or the cancel culture in the boardroom, the goal is the same."
                rows="5" maxlength="500">{{ old('message') }}</textarea>
            <input type="submit" value="Write" />
            @if ($errors->all())
            <section class="errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </section>
            @endif
        </form>
    </section>
</article>
