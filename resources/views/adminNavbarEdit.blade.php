@extends('adminlte::page')

@section('content')
    <div>
        <h1>Page's view : </h1>
        <h5>{{$navbarData->name}}</h5>
        <br>
        <form action="/adminNavbarUpdate/{{$navbarData->id}}" method="post">
            @csrf
            <label for="name">Page's name : 
                <input type="text" name="name" value="{{$navbarData->name}}">
            </label>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection