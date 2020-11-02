<article id="contact">
    @csrf
    <h3 class="title">CONTACT</h3>
    <section class="contact-container" data-aos="fade-up">
    <h5>Ready to start your next project with us?</h5>
    <form action="/contact/send" method="POST">
        @csrf
        <fieldset class="top">
            <label for="name" id="lname" @error('name') style="color: #a32a14;" @enderror>Your name:</label>
            <input type="text" id="name" name="name" placeholder="John" maxlength="12" value="{{ old('name') }}"/>
            <br class="form-divider" />
            <label for="email" id="lemail" @error('email') style="color: #a32a14;" @enderror>Your email:</label>
            <input type="email" id="email" name="email" placeholder="john@gmail.com" value="{{ old('email') }}"/>
        </fieldset>
        <label for="message" id="lmessage" @error('message') style="color: #a32a14;" @enderror>Message:</label>
        <fieldset class="bottom">
        <textarea name="message" id="message" placeholder="Hello guys! Can you design website for me?" rows="5">{{ old('message') }}</textarea>
        </fieldset>
        <input type="submit" value="Send" />
    </form>
    @if ($errors->all())
    <section class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    </section>
    @endif
</section>
</article>
