@extends('layouts.app')

@section('content')

<div class="container bg-light">


    <div class="text-center">
        <h2 class="py-3">{{$comic->title}}</h2>
        <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>

    <div class="row row-cols-3 p-5 justify-content-center">
        <div class="col">
            <p>{{$comic->description}}</p>
            <p><span>{{$comic->series}}</span> <span>Release on {{$comic->sale_date}}</span></p>
            <p><strong>Type: {{$comic->type}}</strong></p>
            <p><strong>Price: {{$comic->price}}</strong></p>
        </div>
    </div>

</div>

@endsection