@extends('adminlte::page')

@section('content')
    @foreach ($homeData as $home)
        <div>
            <h2>{{$home->balise}} :</h2>
            <p>{{$home->texte}}</p>
            <a class="btn btn-info" href="/adminHomeViewEdit/{{$home->id}}">Edit</a>
        </div>
    @endforeach
@endsection