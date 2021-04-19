@extends('adminlte::page')

@section('content')
    <form enctype="multipart/form-data" action="/adminLogoUpdate/{{$editLogo->id}}" method="post">
        @csrf
        <label for="src">Your logo : 
            <input name="src" type="file" value="{{old('src')}}">
        </label>
        <button type="submit">Modify image</button>
    </form>
@endsection