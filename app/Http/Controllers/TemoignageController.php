<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminTemoignage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teamData = Team::all();
        $temoignageData = Temoignage::all();
        return view('adminTemoignage', compact('temoignageData', 'teamData'));
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
            'témoignageTexte' => "required",
            'team_id' => "required",
        ]);
        $newTemoignage = new Temoignage;
        $newTemoignage->témoignageTexte = $request->témoignageTexte;
        $newTemoignage->team_id = $request->team_id;
        $newTemoignage->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(Temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teamData = Team::all();
        $editTemoignage = Temoignage::find($id);
        return view('adminTemoignageEdit', compact('editTemoignage', 'teamData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateTemoignage = Temoignage::find($id);
        $updateTemoignage->témoignageTexte = $request->témoignageTexte;
        $updateTemoignage->team_id = $request->team_id;
        $updateTemoignage->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TemoignageDestroy = Temoignage::find($id);
        $TemoignageDestroy->delete();
        return redirect()->back();
    }
}
