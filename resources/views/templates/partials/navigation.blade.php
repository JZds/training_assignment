<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-toggleable-md" id="navbarResponsive">
        <a class="navbar-brand" href="{{ route('home') }}">Training assignment</a>
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Advertisements</a>
            </li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('advertisements.index') }}">My Advertisements</a>
                </li>
                <li class="nav-item float-lg-right dropdown">
                    <a class="dropdown-toggle nav-link" id="navbarDropdown1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->getName() }}</a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
                        <li class="dropdown-item">
                            Username: <small>{{ Auth::user()->getName() }}</small><br>
                            Email: <small>{{ Auth::user()->getEmail() }}</small>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('advertisements.index') }}">My advertisements</a></li>
                        <li><a class="dropdown-item" href="{{ route('advertisements.create') }}">New advertisement</a></li>
                        <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Log Out</a></li>
                    </ul>
                </li>
            @else
                <li class="nav-item float-lg-right">
                    <a class="nav-link" href="{{ url('/auth/login')  }}">Login</a>
                </li>
                <li class="nav-item float-lg-right">
                    <a class="nav-link" href="{{ url('/auth/register')  }}">New User Registration</a>
                </li>
            @endif
        </ul>
    </div>
</nav>