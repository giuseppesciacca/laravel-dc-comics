@extends('layouts.app')

@section('content')

<style>

</style>

<div class="container bg-light p-0">

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
                                U.S. Price: {{$comic->price}}
                            </span>
                            <span>
                                AVAIBLE
                            </span>
                        </p>
                    </div>
                    <div class="col-3 avaibility_box">
                        <p class="m-0 py-3 text-center">Check Avaibility</p>
                    </div>
                </div>
                <!-- /green banner -->

                <div class="row">
                    <div class="col-12 p-0 py-3 description">
                        <p>{{$comic->description}}</p>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-4">
                ADVERTISEMENT
            </div>

        </div>
    </div>

    <div class="bottom_show_page">
        <div class="container_small">
            <div class="row row-cols-lg-2 g-3 justify-content-center">
                <div class="col">
                    <h2 class="border-bottom py-3 m-0 text_dark_blue">Talent</h2>

                    <p class="border-bottom m-0 py-2"><span class="text_dark_blue">Art by:</span></p>
                    <p class="border-bottom m-0 py-2"><span class="text_dark_blue">Written by:</span></p>
                </div>
                <div class="col">
                    <h2 class="border-bottom py-3 m-0 text_dark_blue">Specs</h2>

                    <p class="border-bottom m-0 py-2"> <span class="text_dark_blue">Series:</span> {{$comic->series}}</p>
                    <p class="border-bottom m-0 py-2"><span class="text_dark_blue">U.S. Price:</span> {{$comic->price}}</p>
                    <p class="border-bottom m-0 py-2"><span class="text_dark_blue">On Sale Date: </span>{{$comic->sale_date}}</p>
                </div>
            </div>
        </div>

    </div>

    @endsection