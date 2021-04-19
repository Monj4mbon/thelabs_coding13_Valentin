@extends('adminlte::page')

@section('content')
    <form action="/adminHomeViewUpdate/{{$homeData->id}}" method="post">
        @csrf
        <label for="texte">{{$homeData->balise}}'s text : 
            <input name="texte" type="text" value="{{$homeData->texte}}">
        </label>
        <label class="d-none" for="balise">{{$homeData->balise}}'s text : 
            <input name="balise" type="text" value="{{$homeData->balise}}">
        </label>
        <label class="d-none" for="vert">{{$homeData->balise}}'s text : 
            <input name="vert" type="text" value="{{$homeData->vert}}">
        </label>
        <button type="submit">Modify text</button>
    </form>
@endsection