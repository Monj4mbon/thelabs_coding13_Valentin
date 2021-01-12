<?php

namespace App\Http\Controllers;

use App\Models\Banniere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BanniereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('adminBanniere');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banniereData = Banniere::all();
        return view ('adminBanniere', compact('banniereData'));
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
            'src'=>'required',
        ]);
        $newBanniere = new Banniere;
        $newBanniere->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img', 'public');
        $newBanniere->save();
        return redirect('/adminBanniere');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function show(Banniere $banniere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function edit(Banniere $banniere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banniere $banniere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banniereDestroy = Banniere::find($id);
        $banniereDestroy->delete();
        Storage::disk('public')->delete('img/'.$banniereDestroy->src);
        return redirect()->back();
    }
}
