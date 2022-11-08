<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel 8</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($navbar as $name => $url)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $url }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
            @auth
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item ml-auto dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            @endauth
            @guest
                <ul @class(['navbar-nav mb-2 mb-lg-0 ', 'font-bold' => true])>
                    <li class="nav-item ml-auto">
                        <a href="{{ route('register') }}" @class(['nav-link'])>Register</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a href="{{ route('login') }}" @class(['nav-link'])>Login</a>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</nav>


{{-- <div>
  <ul class="navbar">
    @foreach ($navbar as $name => $url)
    <li><a href="{{ $url }}">{{ $name }}</a></li>
    @endforeach
  </ul>
</div> --}}
