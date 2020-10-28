<article class="form-container">
    <section class="loginbox signup" data-aos="fade-down">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
        <h1>Sign up</h1>
        @if ($errors->all())
        <section>
            <ul class="errors register">
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </section>
        @endif
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">{{ __('Name:') }}</label>
            <input type="text" name="name" placeholder="Enter your full name" value="">
            <label for="email">{{ __('Email:') }}</label>
            <input id="email" type="email" @error('email') class="error-input" is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
            <label for="password">{{ __('Password:') }}</label>
            <input id="password" type="password" @error('password') class="error-input" is-invalid @enderror"
                name="password" required autocomplete="current-password" placeholder="Enter your password">
            <label for="password_confirm">{{ __('Confirm password:') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <button type="submit" name="">{{ __('Sign up') }}</button>
            @if (Route::has('password.request'))
            <a class="forgot" href="{{ route('password.request') }}">Forgot your password?</a>
            @endif
            <a href="{{ route('login') }}">Already have an account?</a>
        </form>
    </section>
</article>
