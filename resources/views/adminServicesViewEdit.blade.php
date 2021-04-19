@extends('adminlte::page')

@section('content')
    <form action="/adminServicesViewUpdate/{{$servicesData->id}}" method="post">
        @csrf
        <label for="texte">{{$servicesData->balise}}'s text : 
            <input name="texte" type="text" value="{{$servicesData->texte}}">
        </label>
        <label class="d-none" for="balise">{{$servicesData->balise}}'s text : 
            <input name="balise" type="text" value="{{$servicesData->balise}}">
        </label>
        <label class="d-none" for="vert">{{$servicesData->balise}}'s text : 
            <input name="vert" type="text" value="{{$servicesData->vert}}">
        </label>
        <button type="submit">Modify text</button>
    </form>
@endsection