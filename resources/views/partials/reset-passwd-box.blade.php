<article class="form-container">

<section class="loginbox" data-aos="fade-down">
    <div class="avatar">
        <i class="fa fa-user"></i>
    </div>
    <h1>{{ __('Reset Password') }}</h1>
    @if ($errors->all())
    <ul class="errors">
        @foreach($errors->all() as $error)
        <li> {{ $error }}</li>
        @endforeach
    </ul>
    @endif
    @if (session('status'))
       <span class="success">{{ session('status') }}</span>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label for="email">{{ __('Email:') }}</label>
            <input id="email" type="email" @error('email') class="error-input" is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
        <button type="submit" name="">{{ __('Send request') }}</button>
        <a class="disb" href="{{ route('register') }}">You are new?</a>
        <a href="{{ route('login') }}">Already have an account?</a>
    </form>
</section>
</article>
