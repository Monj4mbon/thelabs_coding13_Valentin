<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesData = Services::all();
        return view('adminServicesView', compact('servicesData'));
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
        $newServices = new Services;
        $newServices->balise = $request->balise;
        $newServices->vert = $request->vert;
        $newServices->texte = $request->texte;
        $newServices->save();
        return redirect('/adminServicesView');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicesData = Services::find($id);
        return view ('adminServicesViewEdit', compact('servicesData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'balise'=>'required',
            'vert'=>'required',
            'texte'=>'required',
        ]);
        $updateServices = Services::find($id);
        $updateServices->balise = $request->balise;
        $updateServices->vert = $request->vert;
        $updateServices->texte = $request->texte;
        $updateServices->save();
        // if ($updateServices->vert == 'oui') {
        //     return redirect('/adminServicesVert');
        // }else {
            return redirect('/adminServicesView');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
