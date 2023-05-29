@extends('layouts.app')


@section('content')
<div class="container bg-light py-3">

    <table class="table table-striped m-0">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale date</th>
                <th scope="col">Type</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($comics as $comic)
            <tr>
                <td scope="row"><a href="{{route('comics.show', $comic->id)}}">{{$comic['title']}}</a></td>
                <td>{{$comic['description']}}</td>
                <td>{{$comic['thumb']}}</td>
                <td>{{$comic['price']}}</td>
                <td>{{$comic['series']}}</td>
                <td>{{$comic['sale_date']}}</td>
                <td>{{$comic['type']}}</td>
            </tr>

            @empty
            <p>No comics</p>
        </tbody>
        @endforelse
    </table>



</div>
@endsection