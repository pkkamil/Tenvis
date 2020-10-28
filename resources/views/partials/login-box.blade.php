<article class="form-container">
    <section class="loginbox" data-aos="fade-down">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
        <h1>Login</h1>
        @if ($errors->all())
        <ul class="errors">
            @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">{{ __('Email:') }}</label>
            <input id="email" type="email" @error('email') class="error-input" is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
            <label for="password">{{ __('Password:') }}</label>
            <input id="password" type="password" @error('password') class="error-input" is-invalid @enderror"
                name="password" required autocomplete="current-password" placeholder="Enter your password">
            <button type="submit" name="">{{ __('Login') }}</button>
            @if (Route::has('password.request'))
            <a class="forgot" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
            <a href="{{ route('register') }}">You are new?</a>
        </form>
    </section>
</article>
