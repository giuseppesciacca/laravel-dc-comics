@extends('layouts.app')


@section('content')
<div class="container bg-light py-3">
    <h5>Add new Comic</h5>
    <a href="{{route('comics.create')}}"><i class="fa-solid fa-plus fa-2x"></i></a>

    <table class="table table-striped m-0 py-5">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale date</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($comics as $comic)
            <tr>
                <td scope="row">{{$comic['title']}}</a></td>
                <td>{{$comic['description']}}</td>
                <td>{{$comic['thumb']}}</td>
                <td>{{$comic['price']}}</td>
                <td>{{$comic['series']}}</td>
                <td>{{$comic['sale_date']}}</td>
                <td>{{$comic['type']}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('comics.edit', $comic->id)}}"><i class="fa-solid fa-pencil"></i></a>

                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>

            @empty
            <p>No comics</p>
        </tbody>
        @endforelse
    </table>



</div>
@endsection