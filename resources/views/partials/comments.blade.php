<article id="comments">
    <h3 class="title">Comments</h3>
    @if (count($comments) == 0)
        <span class="noComments">
            <h4>There are no comments.</h4>
            <h5>Write a comment and it will appear here.</h5>
        </span>
    @endif
    @foreach ($comments as $comment)
        <span class="single-comment">
            <img src="/resources/img/avatars/{{$comment -> avatar}}" class="avatar" />
            <span class="name">{{$comment -> name}}</span>
            <span class="wrote">wrote:</span>
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
        <form action="../../write_comment.php">
            <textarea name="message" id="message"
                placeholder="Whether it is the mob on the street, or the cancel culture in the boardroom, the goal is the same."
                rows="5"></textarea>
            <input type="submit" value="Write" />
        </form>
    </section>
</article>
