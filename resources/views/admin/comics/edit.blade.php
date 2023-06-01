@extends('layouts.app')

@section('content')

<div class="bg-light py-3">

    <div class="container">

        <!--         @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif -->

        <h5 class="text-uppercase text-muted my-4">Edit a Comic</h5>

        <form action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$comic->title}}" placeholder=" Comic title here " aria-describedby=" nameHelper">

                @error('title')
                <div class="alert alert-danger" role="alert">
                    <strong>Errore: </strong>{{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" value="{{$comic->description}}" class="form-control @error('description') is-invalid @enderror" placeholder="Comic description here " aria-describedby="nameHelper">
                @error('description')
                <div class="alert alert-danger" role="alert">
                    <strong>Errore: </strong>{{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Comic image here " aria-describedby="imageHelper" value="{{$comic->thumb}}">
                @error('thumb')
                <div class="alert alert-danger" role="alert">
                    <strong>Errore: </strong>{{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Comic price here " aria-describedby="priceHelper" value="{{$comic->price}}">
                @error('price')
                <div class="alert alert-danger" role="alert">
                    <strong>Errore: </strong>{{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Comic series here " aria-describedby="imageHelper" value="{{$comic->series}}">
                @error('series')
                <div class="alert alert-danger" role="alert">
                    <strong>Errore: </strong>{{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="Comic sale date here " aria-describedby="imageHelper" value="{{$comic->sale_date}}">
                @error('sale_date')
                <div class="alert alert-danger" role="alert">
                    <strong>Errore: </strong>{{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Comic sale date here " aria-describedby="imageHelper" value="{{$comic->type}}">
                @error('type')
                <div class="alert alert-danger" role="alert">
                    <strong>Errore: </strong>{{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 my-4">Save</button>

        </form>

    </div>

    @endsection