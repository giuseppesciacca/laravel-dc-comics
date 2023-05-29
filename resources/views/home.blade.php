@extends('layouts.app')


@section('content')
<main id="app_main" class="text-white">

    <div class="jumbotron mb-4"></div>
    <!-- /.jumbotron -->

    <div class="container px-3 py-5 position-relative">

        <div id="current_series" class="position-absolute bg-primary p-3">
            <h2 class="m-0 fw-bold">CURRENT SERIES</h2>
        </div>
        <!-- /#current_series -->

        <div class="row">

            @foreach ($comics as $comic)
            <div class="col-6 col-md-4 col-lg-2">
                <img class="img-fluid" src="{{$comic['thumb']}}" alt="">

                <p class="py-3">{{$comic['title']}}</p>
            </div>
            @endforeach

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary rounded-0 d-inline">LOAD MORE</button>
            </div>

        </div>
    </div>
    <!-- /cards -->

    <div class="banner_main d-flex align-items-center">
        <div class="container">
            <div class="row text-white align-items-center px-5">

                @foreach ($banner as $item)
                <div class="col-12 col-md-6 col-lg d-flex align-items-center py-3 p-lg-0">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/'). $item['src'] }}" alt="">
                    <p class="ps-3 m-0">{{ $item['text'] }}</p>
                </div>
                @endforeach
                <!-- /.cols -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.banner_main -->
</main>
@endsection