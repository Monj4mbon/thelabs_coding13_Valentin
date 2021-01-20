@extends('adminlte::page')

@section('content')
        <div class="d-flex flex-column">
            @foreach ($allNavbar as $navbar)
                <div class="card">
                    <h1>Page {{$navbar->view}}'s name : </h1>
                    <p>{{$navbar->name}}</p>
                    <a style="width:25%" class="btn btn-info" href="/adminNavbarEdit/{{$navbar->id}}">Edit</a>
                </div>
            @endforeach
        </div>
@endsection