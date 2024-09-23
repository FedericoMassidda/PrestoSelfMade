<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('article.index')}}">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{route('article.index')}}">Home</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="{{route('article.create')}}">Pubblica articolo</a></li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        @if (Auth::user())
                            {{Auth::user()->name}}
                        @else
                            Utente
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @guest
                            <li>
                                <a class="dropdown-item" href="{{route('login')}}">
                                    <button type="button" class="btn btn-outline-success mb-2 btnSizeCustom">
                                        Login
                                    </button>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('register')}}">
                                    <button type="button" class="btn btn-outline-primary btnSizeCustom">
                                        Registrati
                                    </button>
                                </a>
                                </li>
                        @endguest
                        @auth
                            <li>
                                <a class="dropdown-item" href="#">
                                    <button type="button" class="btn btn-outline-secondary btnSizeCustom">Profilo</button>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btnSizeCustom">Logout</button>
                                    </form>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>





{{-- <div class="navbarWrapper">
    <ul class="navbarItemsWrapper">
        <li class="navbarItem">voce 1</li>
        <li class="navbarItem">voce 2</li>
        <li class="navbarItem">voce 3</li>
        <li class="navbarItem">voce 4</li>
        <li class="navbarItem">voce 5</li>
    </ul>
</div> --}}