@extends('adminlte::page')

@section('content')
    <form enctype="multipart/form-data" action="/adminBanniereStore" method="post">
        @csrf
        <label for="src">Your image : 
        <input name="src" type="file" value="{{old('src')}}">
    </label>
    <button type="submit">Add an image</button>
    </form>
    @foreach ($banniereData as $banniere)
        @if ($banniere->created_at === NULL)
            <div class="mb-5">
                <img src="{{$banniere->src}}" style="height:200px;border:solid 2px black">            
                <a class="btn btn-danger" href="/adminBanniereDestroy/{{$banniere->id}}">Delete</a>
            </div>
        @else
            <div class="mb-5">
                <img src="{{asset('img/'.$banniere->src)}}" style="height:200px;border:solid 2px black">
                <a class="btn btn-danger" href="/adminBanniereDestroy/{{$banniere->id}}">Delete</a>
            </div>
        @endif
    @endforeach
@endsection