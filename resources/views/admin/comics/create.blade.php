@extends('layouts.app')

@section('content')

<div class="bg-light py-3">

    <div class="container">
        <h5 class="text-uppercase text-muted my-4">Add a new Comic</h5>

        <form action="" method="post">

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Comic title here " aria-describedby="nameHelper" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Description</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Comic description here " aria-describedby="nameHelper">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" id="image" class="form-control" placeholder="Comic image here " aria-describedby="imageHelper" require>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Saber price here " aria-describedby="priceHelper" require>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Comic series here " aria-describedby="imageHelper">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Comic sale date here " aria-describedby="imageHelper" require>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Comic sale date here " aria-describedby="imageHelper" require>
            </div>

            <button type="submit" class="btn btn-primary w-100 my-4">Save</button>

        </form>

    </div>

    @endsection