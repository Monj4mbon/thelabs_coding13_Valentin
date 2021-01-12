@extends('adminlte::page')

@section('content')
    <link rel="stylesheet" href="css/flaticon.css"/>
    <div class="col-4 my-5">
        <div class="d-flex" style="max-width: 18rem;">
            <div class="mr-3"><i class="{{$editServicesCreate->services_icone}}"></i></div>
            <div>
                <h3>{{$editServicesCreate->services_titre}}</h3>
                <p>{{$editServicesCreate->services_texte}}</p>
            </div>
        </div>
    </div>
    <form action="/adminServicesUpdate/{{$editServicesCreate->id}}" method="post">
        @csrf
        <label for="services_icone">Service's icon :
            <input type="text" name="services_icone" value="{{$editServicesCreate->services_icone}}">
        </label>
        <label for="services_titre">Service's title :
            <input type="text" name="services_titre" value="{{$editServicesCreate->services_titre}}">
        </label>
        <label for="services_texte">Service's text :
            <input type="text" name="services_texte" value="{{$editServicesCreate->services_texte}}">
        </label>
        <button type="submit">Update</button>
    </form>
@endsection