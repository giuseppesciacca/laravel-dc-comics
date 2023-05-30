@extends('layouts.app')

@section('content')

<div class="bg-light py-3">

    <div class="container">
        <h5 class="text-uppercase text-muted my-4">Edit a Comic</h5>

        <form action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}" placeholder=" Comic title here " aria-describedby=" nameHelper" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" value="{{$comic->description}}" class="form-control" placeholder="Comic description here " aria-describedby="nameHelper">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic image here " aria-describedby="imageHelper" value="{{$comic->thumb}}" require>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Comic price here " aria-describedby="priceHelper" value="{{$comic->price}}" require>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Comic series here " aria-describedby="imageHelper" value="{{$comic->series}}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale date here " aria-describedby="imageHelper" value="{{$comic->sale_date}}" require>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Comic sale date here " aria-describedby="imageHelper" value="{{$comic->type}}" require>
            </div>

            <button type="submit" class="btn btn-primary w-100 my-4">Save</button>

        </form>

    </div>

    @endsection