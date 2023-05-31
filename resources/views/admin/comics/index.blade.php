@extends('layouts.app')


@section('content')
<div class="container-fluid bg-light py-3">
    <h5>Add new Comic</h5>
    <a href="{{route('comics.create')}}"><i class="fa-solid fa-plus fa-2x"></i></a>

    <table class="table table-striped m-0 py-5">
        <thead>
            <tr>
                <th scope="col">Title</th>
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
                <td scope="row">{{$comic['title']}}</td>
                <td>{{$comic['thumb']}}</td>
                <td>{{$comic['price']}}</td>
                <td>{{$comic['series']}}</td>
                <td>{{$comic['sale_date']}}</td>
                <td>{{$comic['type']}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('comics.edit', $comic->id)}}"><i class="fa-solid fa-pencil"></i></a>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalId-{{$comic->id}}">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="modalId-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalTitleId">Delete Comic</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this comic?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">CONFIRM</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>

            @empty
            <p>No comics</p>
        </tbody>
        @endforelse
    </table>



</div>
@endsection