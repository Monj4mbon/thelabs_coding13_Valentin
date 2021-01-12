<?php

namespace App\Http\Controllers;

use App\Models\ServicesCreate;
use Illuminate\Http\Request;


class ServicesCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminServices');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicesCreateData = ServicesCreate::all();
        return view('adminServices', compact('servicesCreateData'));
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
            'services_icone' => "required",
            'services_titre' => "required",
            'services_texte' => "required",
        ]);

        $newservicesCreate = new ServicesCreate;
        $newservicesCreate->services_icone = $request->services_icone;
        $newservicesCreate->services_titre = $request->services_titre;
        $newservicesCreate->services_texte = $request->services_texte;
        $newservicesCreate->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicesCreate  $servicesCreate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicesCreate  $servicesCreate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editServicesCreate = ServicesCreate::find($id);
        return view('adminServicesEdit', compact('editServicesCreate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicesCreate  $servicesCreate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateServicesCreate = ServicesCreate::find($id);
        $updateServicesCreate->services_icone = $request->services_icone;
        $updateServicesCreate->services_titre = $request->services_titre;
        $updateServicesCreate->services_texte = $request->services_texte;
        $updateServicesCreate->save();
        return redirect('/adminServices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicesCreate  $servicesCreate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteServicesCreate = ServicesCreate::find($id);
        $deleteServicesCreate->delete();
        return redirect('/adminServices');
    }
}
