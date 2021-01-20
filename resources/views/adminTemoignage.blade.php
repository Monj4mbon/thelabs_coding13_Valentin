@extends('adminlte::page')

@section('content')
    <form action="/adminTemoignageStore" method="post">
        @csrf
        <div>
            <label for="témoignageTexte">Testimonial's text :
                <textarea type="text" name="témoignageTexte">{{old('témoignageTexte')}}</textarea>
            </label>
            <label for="team_id">Testimonial's autor :
                <select name="team_id">
                    @foreach ($teamData as $team)
                        <option value="{{$team->id}}">{{$team->prénom}} {{$team->nom}}, {{$team->fonction}}</option>
                    @endforeach
                </select>                
            </label>
            <button style="height:30px;width:75px" type="submit">Create</button>
        </div>
    </form>
    <div class="row">
        @foreach ($temoignageData as $temoignage)
            <div class="col-4 my-5">
                <div class="d-flex card" style="max-width: 18rem;">
                    <div>
                        <p>{{$temoignage->témoignageTexte}}</p>
                        <img style="height:100px;width:100px" src="{{$temoignage->team->photoSrc}}">
                        <h2>{{$temoignage->team->prénom}} {{$temoignage->team->nom}}</h2>
                        <p>{{$temoignage->team->fonction}}</p>
                        <a class="btn btn-info" href="/adminTemoignageEdit/{{$temoignage->id}}">Edit</a>
                        <a class="btn btn-danger" href="/adminTemoignageEdit/{{$temoignage->id}}">Delete</a>
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