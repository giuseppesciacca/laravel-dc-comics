@include('layouts.app')

@section('content')

<div class="container">

    <h1>show</h1>

    <div class="row row-cols-3">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h2>{{$comic->title}}</h2>
        <p>{{$comic->description}}</p>
        <p><span>{{$comic->series}} </span> <span>{{$comic->sale_date}}</span></p>
        <p><strong> {{$comic->type}}</strong></p>
        <p><strong> {{$comic->price}}</strong></p>
    </div>

</div>

@endsection