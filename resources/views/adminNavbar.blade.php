@extends('adminlte::page')

@section('content')
        <div class="d-flex flex-column">
            @foreach ($allNavbar as $navbar)
                <a>{{$navbar->navAccueil}}</a>
                <a>{{$navbar->navServices}}</a>
                <a>{{$navbar->navBlog}}</a>
                <a>{{$navbar->navContact}}</a>
                <a class="btn btn-info" href="/adminNavbarEdit/{{$navbar->id}}">Edit</a>
            @endforeach
        </div>
@endsection