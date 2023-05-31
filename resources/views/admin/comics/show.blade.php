@extends('layouts.app')

@section('content')

<style>
    #current_comic {
        position: relative;
        bottom: 110%;
        left: 30%;
        width: 150px;
        border: 1px solid white;
    }

    #banner_blue {
        width: 100%;
        height: 80px;
        background-color: rgba(2, 130, 249, 1);
    }
</style>

<div class="container bg-light p-0">

    <div class="jumbotron mb-4 d-flex flex-column justify-content-end">
        <div id="banner_blue"></div>
    </div>
    <!-- /.jumbotron + banner_blue -->

    <div class="container px-3 py-5 position-relative">

        <div id="current_comic" class="position-absolute">
            <img class="img-fluid" width="100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <!-- /#current_comic -->

        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="py-3">{{$comic->title}}</h2>

                <div class="bg-success text-white row">

                    <div class="col-7">
                        <p class="d-flex justify-content-between">
                            U.S. Price: {{$comic->price}}
                            AVAIBLE
                        </p>
                    </div>
                    <div class="col-5">
                        Check Avaibility
                    </div>
                </div>
                <!-- /green banner -->
                <p>{{$comic->description}}</p>

            </div>

            <div class="col-12 col-lg-4">
                PUBBLICITà
            </div>

        </div>





        <div class="row row-cols-3 p-5 justify-content-center">
            <div class="col">
                <p><span>{{$comic->series}}</span> <span>Release on {{$comic->sale_date}}</span></p>
                <p><strong>Type: {{$comic->type}}</strong></p>
                <p><strong>Price: {{$comic->price}}</strong></p>
            </div>
        </div>

    </div>

    @endsection