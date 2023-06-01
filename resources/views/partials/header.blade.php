<header id="app_header">
    <div class="container">

        <nav class="navbar navbar-expand-xl p-0">

            <div class="logo navbar-brand">
                <img class="img" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo">
            </div>
            <!-- /nav left -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <ul class="nav navbar-nav ">
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item d-flex align-items-center text-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="/">COMICS</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">MOVIE</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">TV</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">GAMES</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">FANS</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">NEWS</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="#">SHOP</a>
                        </li>
                        <li class="nav-item d-flex align-items-center px-lg-2">
                            <a class="nav-link" aria-current="page" href="{{route('comics.index')}}"><span><i class="fa-solid fa-user-gear px-2"></i></span>ADMIN</a>
                        </li>
                    </ul>
                </div>
                <!-- /nav right -->
        </nav>
    </div>
    <!-- /container -->
</header>