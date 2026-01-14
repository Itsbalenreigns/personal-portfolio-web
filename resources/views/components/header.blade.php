<!-- HEADER START -->
<div class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow py-3">
        <div class="container">
            <a class="navbar-brand" href="#">PU JPc</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            aria-current="page" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.about') ? 'active' : '' }}" href="{{ route('pages.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.education') ? 'active' : '' }}" href="{{ route('pages.education') }}">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.skills') ? 'active' : '' }}" href="{{ route('pages.skills') }}">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.projects') ? 'active' : '' }}" href="{{ route('pages.projects') }}">Projects</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}" href="#">Experience</a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages.contact') ? 'active' : '' }}" href="{{ route('pages.contact') }}">Contact</a>
                    </li>
                </ul>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                @else
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            @if(Auth::user()->is_admin)
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Panel</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </nav>
</div>
<!-- HEADER END -->