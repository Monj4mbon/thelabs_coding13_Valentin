@extends('adminlte::page')

@section('content')
    <div class="d-flex card" style="max-width: 18rem;">
        <div>
            <p>{{$editTemoignage->témoignageTexte}}</p>
            @if ($editTemoignage->created_at === NULL)
                <img style="height:100px;width:100px" src="{{$editTemoignage->team->photoSrc}}">
            @else
                <img style="height:100px;width:100px" src="{{asset('img/'.$editTemoignage->team->photoSrc)}}">
            @endif
            <h2>{{$editTemoignage->team->prénom}} {{$editTemoignage->team->nom}}</h2>
            <p>{{$editTemoignage->team->fonction}}</p>
        </div>
    </div>
    <form action="/adminTemoignageUpdate/{{$editTemoignage->id}}" method="post">
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
@endsection