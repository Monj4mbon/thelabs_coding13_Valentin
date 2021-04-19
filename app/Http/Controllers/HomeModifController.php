<?php

namespace App\Http\Controllers;

use App\Models\HomeModif;
use Illuminate\Http\Request;

class HomeModifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeData = HomeModif::all();
        return view('adminHomeView', compact('homeData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'balise'=>'required',
            'vert'=>'required',
            'texte'=>'required',
        ]);
        $newHome = new HomeModif;
        $newHome->balise = $request->balise;
        $newHome->vert = $request->vert;
        $newHome->texte = $request->texte;
        $newHome->save();
        return redirect('/adminHomeView');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeModif  $homeModif
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeModif  $homeModif
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homeData = HomeModif::find($id);
        return view ('adminHomeViewEdit', compact('homeData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeModif  $homeModif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'balise'=>'required',
            'vert'=>'required',
            'texte'=>'required',
        ]);
        $updateHome = HomeModif::find($id);
        $updateHome->balise = $request->balise;
        $updateHome->vert = $request->vert;
        $updateHome->texte = $request->texte;
        $updateHome->save();
        // if ($updateHome->vert == 'oui') {
        //     return redirect('/adminHomeVert');
        // }else {
            return redirect('/adminHomeView');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeModif  $homeModif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
