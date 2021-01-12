@extends('adminlte::page')

@section('content')
    <div>
        <form action="/adminNavbarUpdate/{{$navbarData->id}}" method="post">
            @csrf
            <label for="navAccueil">Page home : 
                <input type="text" name="navAccueil" value="{{$navbarData->navAccueil}}">
            </label>
            <br>
            <label for="navServices">Page services : 
                <input type="text" name="navServices" value="{{$navbarData->navServices}}">
            </label>
            <br>
            <label for="navBlog">Page blog : 
                <input type="text" name="navBlog" value="{{$navbarData->navBlog}}">
            </label>
            <br>
            <label for="navContact">Page contact : 
                <input type="text" name="navContact" value="{{$navbarData->navContact}}">
            </label>
            <button type="submit">Update</button>
        </form>
    </div>
@endsection