@extends('adminlte::page')

@section('content')
    <link rel="stylesheet" href="css/flaticon.css"/>
    <form action="/adminServicesStore" method="post">
        @csrf
        <label for="services_icone">Service's icon :
            <input type="text" name="services_icone" value="{{old('services_icone')}}">
        </label>
        <label for="services_titre">Service's title :
            <input type="text" name="services_titre" value="{{old('services_titre')}}">
        </label>
        <label for="services_texte">Service's text :
            <input type="text" name="services_texte" value="{{old('services_texte')}}">
        </label>
        <button type="submit">Create</button>
    </form>
    <div class="row">
        @foreach ($servicesCreateData as $services)
            <div class="col-4 my-5">
                <div class="d-flex" style="max-width: 18rem;">
                    <div class="mr-3"><i class="{{$services->services_icone}}"></i></div>
                    <div>
                        <h3>{{$services->services_titre}}</h3>
                        <p>{{$services->services_texte}}</p>
                        <a class="btn btn-info" href="/adminServicesEdit/{{$services->id}}">Edit</a>
                        <a class="btn btn-danger" href="/adminServicesDestroy/{{$services->id}}">Delete</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
                </div>
                <div class="row">
            @endif
        @endforeach
    </div>
@endsection