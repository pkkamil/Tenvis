<nav>
    <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
    </div>
    <div class="logo">
        <a href="/">TENVIS</a>
    </div>
    <div class="menu">
        <ul>
            <li><a @if ($active == 'dashboard') class="active" @endif href="/dashboard">Dashboard</a></li>
        <li><a @if ($active == 'editor') class="active" @endif href="{{ route('editor') }}">Editor</a></li>
            @if (Auth::user() -> role == "Admin")
            <li><a @if ($active == 'users') class="active" @endif href="{{ route('manageUsers') }}">Users</a></li>
            @else
            <li><a @if ($active == 'posts') class="active" @endif href="{{ route('userPosts') }}">Posts</a></li>
            @endif
            <li><a @if ($active == 'account') class="active" @endif href="{{ route('account') }}">Account</a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
