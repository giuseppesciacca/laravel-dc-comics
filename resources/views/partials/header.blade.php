<header id="app_header" class="">
    <div class="container">
        <div class="row">

            <div class="logo col-12 col-md-5 col-lg-2 d-flex align-items-center">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="">
            </div>
            <!-- /header left -->

            <nav class="navbar navbar-expand col-12 col-md-7 col-lg-10 p-0 justify-content-end">
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
            </nav>
            <!-- /header right -->

        </div>
    </div>
</header>