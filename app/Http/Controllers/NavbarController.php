<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allNavbar = Navbar::all();
        return view ('adminNavbar', compact('allNavbar'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $navbarData = Navbar::find($id);
        return view ('adminNavbarEdit', compact('navbarData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'navAccueil'=>'required',
            'navServices'=>'required',
            'navBlog'=>'required',
            'navContact'=>'required',
        ]);
        $updateNavbar = Navbar::find($id);;
        $updateNavbar->navAccueil = $request->navAccueil;
        $updateNavbar->navServices = $request->navServices;
        $updateNavbar->navBlog = $request->navBlog;
        $updateNavbar->navContact = $request->navContact;
        $updateNavbar->save();
        return redirect('/adminNavbar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
