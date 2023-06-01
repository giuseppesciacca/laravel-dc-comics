@extends('layouts.app')

@section('content')

<div class="jumbotron mb-4 d-flex flex-column justify-content-end">
    <div id="banner_blue"></div>
</div>
<!-- /.jumbotron + banner_blue -->

<div class="container_small px-3 py-5 position-relative">

    <div id="current_comic" class="position-absolute">
        <img class="img-fluid" width="100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
    <!-- /#current_comic -->

    <div class="row">
        <div class="col-12 col-lg-8">
            <h2 class="py-3 text_dark_blue">{{$comic->title}}</h2>

            <div class="banner_green text-white row">

                <div class="col-9">
                    <p class="m-0 py-3 d-flex justify-content-between">
                        <span>
                            <span class="text_light_green">U.S. Price:</span> {{$comic->price}}
                        </span>
                        <span>
                            <span class="text_light_green">AVAIBLE</span>
                        </span>
                    </p>
                </div>

                <div class="col-3 avaibility_box">
                    <div class="dropdown open py-3">
                        <button class="btn dropdown-toggle text-white p-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Check Avaibility
                        </button>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <button class="dropdown-item" href="#">Action</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /green banner -->

            <div class="row">
                <div class="col-12 p-0 py-3 description">
                    <p>{{$comic->description}}</p>
                </div>
            </div>
            <!-- /description -->

        </div>

        <div class="col-12 col-lg-4 description text-center text-lg-end">
            <p class="m-0">ADVERTISEMENT</p>
            <img class="img-fluid" style="width: 300px;" src="{{ Vite::asset('resources/images//'). 'adv.jpg' }}" alt="advertisement">
        </div>
        <!-- /adv -->
    </div>
    <!-- /row -->
</div>
<!-- /container small -->

<div class="bottom_show_page">
    <div class="container_small">
        <div class="row row-cols-1 row-cols-lg-2 px-3 px-lg-0 g-3 justify-content-center">
            <div class="col">
                <h2 class="border-bottom py-3 m-0 text_dark_blue">Talent</h2>

                <p class="border-bottom m-0 py-2 d-flex justify-content-between"><span class="text_dark_blue">Art by:</span></p>
                <p class="border-bottom m-0 py-2 d-flex justify-content-between"><span class="text_dark_blue">Written by:</span></p>
            </div>
            <!-- /col -->

            <div class="col">
                <h2 class="border-bottom py-3 m-0 text_dark_blue">Specs</h2>

                <p class="border-bottom m-0 py-2 d-flex justify-content-between"> <span class="text_dark_blue">Series:</span> <span class="series_comic">{{$comic->series}}</span></p>
                <p class="border-bottom m-0 py-2 d-flex justify-content-between"><span class="text_dark_blue">U.S. Price:</span> {{$comic->price}}</p>
                <p class="border-bottom m-0 py-2 d-flex justify-content-between"><span class="text_dark_blue">On Sale Date: </span>{{$comic->sale_date}}</p>
            </div>
            <!-- /col -->

        </div>
        <!-- /row -->
    </div>
    <!-- /container small -->
</div>
<!-- bottom_show_page -->

<div class="banner_show_page d-flex align-items-center">
    <div class="container_small">
        <div class="row text-white align-items-center">

            @foreach ($banner as $item)
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-center p-3 p-lg-0 m-0 card_banner_show description m-auto justify-content-center">
                <p class="ps-3 m-0">{{ $item['text'] }}</p>
                <img class="img-fluid" src="{{ Vite::asset('resources/images/'). $item['src'] }}" alt="">
            </div>
            @endforeach
            <!-- /.cols -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.banner_show_page -->

@endsection