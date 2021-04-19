@extends('adminlte::page')

@section('content')
    @foreach ($logoData as $logo)
        @if ($logo->created_at === NULL && $logo->updated_at === NULL)
            <div class="mb-5">
                <img src="{{$logo->src}}" style="height:200px;border:solid 2px black">
            </div>
        @else
            <div class="mb-5">
                <img src="{{asset('img/'.$logo->src)}}" style="height:200px;border:solid 2px black">
            </div>
        @endif
        <a class="btn btn-info" href="/adminLogoEdit/{{$logo->id}}">Edit</a>
    @endforeach
@endsection