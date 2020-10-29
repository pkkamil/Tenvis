<article class="form-container">
    <section class="loginbox verify" data-aos="fade-down">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
        <h1>{{ __('Verify your email') }}</h1>
        @if ($errors->all())
        <ul class="errors">
            @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        @if (session('resent'))
        <span class="success">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </span>
        @endif
        <h6>{{ __('Before proceeding, please check your email for a verification link.') }}</h6>
        <h6>{{ __('If you did not receive the email.') }}</h6>
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit">{{ __('click here to request another') }}</button>
        </form>
    </section>
</article>
