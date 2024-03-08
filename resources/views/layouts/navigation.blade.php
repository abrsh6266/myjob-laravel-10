<nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <!-- Logo -->
        <a href="{{ route('dashboard') }}" class="navbar-brand">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth

                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('seeker.edit') }}"
                            class="nav-link {{ request()->routeIs('seeker.edit') ? 'active' : '' }}">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (Auth::user()->profile_pic)
                                <img src="{{ Storage::url(Auth::user()->profile_pic) }}" width="40"
                                    class="rounded-circle" alt="">
                            @else
                                {{ Auth::user()->name }}
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Log Out</button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}"
                            class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}">Log in</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('seeker') }}"
                                class="nav-link {{ request()->routeIs('seeker') ? 'active' : '' }}">Job Seeker</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('employer') }}"
                                class="nav-link {{ request()->routeIs('employer') ? 'active' : '' }}">Employer</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
<style>
    /* Navbar Container */
    .navbar {
        padding: 0.5rem 1rem;
    }

    /* Navbar Brand */
    .navbar-brand {
        margin-right: 1rem;
        padding: 0.5rem 0;
        font-size: 1.25rem;
        text-decoration: none;
        color: #000;
    }

    /* Navbar Links */
    .navbar-nav {
        margin-left: auto;
    }

    .nav-item {
        margin-right: 0.5rem;
    }

    .nav-link {
        padding: 0.5rem 1rem;
        color: #000;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #007bff;
    }

    /* Active Link */
    .nav-link.active {
        font-weight: bold;
    }

    /* Dropdown */
    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-menu {
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.15);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .dropdown-item {
        display: block;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
    }
</style>
