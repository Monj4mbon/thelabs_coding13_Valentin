@extends('adminlte::page')

@section('content')
    @foreach ($servicesData as $services)
        <div>
            <h2>{{$services->balise}} :</h2>
            <p>{{$services->texte}}</p>
            <a class="btn btn-info" href="/adminServicesViewEdit/{{$services->id}}">Edit</a>
        </div>
    @endforeach
@endsection