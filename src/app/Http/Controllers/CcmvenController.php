<?php

namespace App\Http\Controllers;

use App\Models\Ccmven;
use Illuminate\Http\Request;

class CcmvenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ccmvens = Ccmven::paginate(15);
        return view('ccmven', ['ccmvens' => $ccmvens]);
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
     * @param  \App\Models\Ccmven  $ccmven
     * @return \Illuminate\Http\Response
     */
    public function show(Ccmven $ccmven)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ccmven  $ccmven
     * @return \Illuminate\Http\Response
     */
    public function edit(Ccmven $ccmven)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ccmven  $ccmven
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ccmven $ccmven)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ccmven  $ccmven
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ccmven $ccmven)
    {
        //
    }
}
