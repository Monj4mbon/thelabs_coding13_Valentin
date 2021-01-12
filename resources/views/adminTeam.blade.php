@extends('adminlte::page')

@section('content')
    <form enctype="multipart/form-data" action="/adminTeamStore" method="post">
        @csrf
        <div class="">
            <label for="nom">Team member's first name :
                <input type="text" name="nom" value="{{old('nom')}}">
            </label>
            <label for="prénom">Team member's last name :
                <input type="text" name="prénom" value="{{old('prénom')}}">
            </label>
            <label for="fonction">Team member's function :
                <input type="text" name="fonction" value="{{old('fonction')}}">
            </label>
            <label for="photoSrc">Team member's photo :
                <input type="file" name="photoSrc" value="{{old('photoSrc')}}">
            </label>
            <button style="height:30px;width:75px" type="submit">Create</button>
        </div>
    </form>
    <div class="row">
        @foreach ($teamData as $team)
            <div class="col-4 my-5">
                <div class="d-flex" style="max-width: 18rem;">
                    <div>
                        @if ($team->created_at === NULL)
                            <img style="height:100px;width:100px" src="{{$team->photoSrc}}" alt="">
                        @else
                            <img style="height:100px;width:100px" src="{{asset('img/'.$team->photoSrc)}}" alt="">
                        @endif
                        <h2>{{$team->prénom}} {{$team->nom}}</h2>
                        <h3>{{$team->fonction}}</h3>
                        <a class="btn btn-info" href="/adminTeamEdit/{{$team->id}}">Edit</a>
                        <a class="btn btn-danger" href="/adminTeamDestroy/{{$team->id}}">Delete</a>
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