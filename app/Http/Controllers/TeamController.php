<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminTeam');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teamData = Team::all();
        return view('adminTeam', compact('teamData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => "required",
            'prénom' => "required",
            'fonction' => "required",
            'photoSrc' => "required",
        ]);

        $newTeam = new Team;
        $newTeam->nom = $request->nom;
        $newTeam->prénom = $request->prénom;
        $newTeam->fonction = $request->fonction;
        $newTeam->photoSrc = $request->file('photoSrc')->hashName();
        $request->file('photoSrc')->storePublicly('img', 'public');
        $newTeam->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editTeam = Team::find($id);
        return view('adminTeamEdit', compact('editTeam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateTeam = Team::find($id);
        $updateTeam->nom = $request->nom;
        $updateTeam->prénom = $request->prénom;
        $updateTeam->fonction = $request->fonction;
        Storage::disk('public')->delete('img/'.$updateTeam->photoSrc);
        $updateTeam->photoSrc = $request->file('photoSrc')->hashName();
        $request->file('photoSrc')->storePublicly('img', 'public');
        $updateTeam->save();
        return redirect('/adminTeam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teamDestroy = Team::find($id);
        $teamDestroy->delete();
        Storage::disk('public')->delete('img/'.$teamDestroy->photoSrc);
        return redirect()->back();
    }
}
