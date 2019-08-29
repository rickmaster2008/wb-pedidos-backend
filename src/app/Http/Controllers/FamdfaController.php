<?php

namespace App\Http\Controllers;

use App\Models\Famdfa;
use Illuminate\Http\Request;

class FamdfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $famdfas = Famdfa::paginate(15);
        return view('famdfa', ['famdfas' => $famdfas]);
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
     * @param  \App\Models\Famdfa  $famdfa
     * @return \Illuminate\Http\Response
     */
    public function show(Famdfa $famdfa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Famdfa  $famdfa
     * @return \Illuminate\Http\Response
     */
    public function edit(Famdfa $famdfa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Famdfa  $famdfa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famdfa $famdfa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Famdfa  $famdfa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famdfa $famdfa)
    {
        //
    }
}
