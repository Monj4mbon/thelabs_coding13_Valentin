@extends('adminlte::page')

@section('content')
    <div class="d-flex" style="max-width: 18rem;">
        <div>
            @if ($editTeam->created_at === NULL)
                <img style="height:100px;width:100px" src="{{$editTeam->photoSrc}}" alt="">
            @else
                <img style="height:100px;width:100px" src="{{asset('img/'.$editTeam->photoSrc)}}" alt="">
            @endif
            <h2>{{$editTeam->prénom}} {{$editTeam->nom}}</h2>
            <h3>{{$editTeam->fonction}}</h3>
        </div>
    </div>
    <form enctype="multipart/form-data" action="/adminTeamUpdate/{{$editTeam->id}}" method="post">
        @csrf
        <div class="">
            <label for="nom">Team member's first name :
                <input type="text" name="nom">
            </label>
            <label for="prénom">Team member's last name :
                <input type="text" name="prénom">
            </label>
            <label for="fonction">Team member's function :
                <input type="text" name="fonction">
            </label>
            <label for="photoSrc">Team member's photo :
                <input type="file" name="photoSrc">
            </label>
            <button style="height:30px;width:75px" type="submit">Update</button>
        </div>
    </form>
@endsection