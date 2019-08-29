<?php

namespace App\Http\Controllers;

use App\Models\Detpe;
use App\Models\Famdfa;
use App\Models\Cabpe;
use App\Models\Ccmcli;
use\App\Models\Ccmcpa;
use App\Mail\PedidoProcesado;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class DetpeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Detpe  $detpe
     * @return \Illuminate\Http\Response
     */
    public function show(Detpe $detpe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detpe  $detpe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detpe = Detpe::where('id', $id)->first();
        $famdfa = Famdfa::where('MCODDFA', $detpe['MCODDFA'])->first();
        $famdfas = Famdfa::paginate(15);
        return view('detpe.edit', ['detpe' => $detpe, 'famdfa' => $famdfa, 'famdfas' => $famdfas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detpe  $detpe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // $det = Detpe::where('', $id)->first();
        // $mdcto = $det['MVALVEN'] * $request->input('MPOR_DFA') / 100;
        // $mneto = $det['MVALVEN'] - $mdcto;
        // Detpe::where('id', $id)->update([
        //     'MCODDFA' => $request->input('MCODDFA'),
        //     'MPORDCT1' => $request->input('MPOR_DFA'),
        //     'MDCTOPRD' => $mdcto,
        //     'MDCTO' => round($mdcto, 2),
        //     'MIGV' => round($mneto - ($mneto / 1.18), 2),
        // ]);
        
        // $cab = Cabpe::where('MNSERIE', $request->input('MNSERIE'))->where('MNROPED', $request->input('MNROPED'))->first();
        // $dets = Detpe::where('MNSERIE', $request->input('MNSERIE'))->where('MNROPED', $request->input('MNROPED'))->get();
        // $mtopventa = 0.0;
        // $mdcto_total = 0.0;
        // foreach ($dets as $d) {
        //     if ($d['MCODDFA'] == 'Bono') {
        //         continue;
        //     } else {
        //         $mtopventa = $mtopventa + $d['MVALVEN'];
        //         $mdcto_total = $mdcto_total + $d['MDCTO'];
        //     }
        // }
        // $mneto_total = $mtopventa - $mdcto_total;
        // $migv_total = $mneto_total - ($mneto_total / 1.18);

        // $cab->update([
        //     'MTOPVENTA' => round($mtopventa, 2),
        //     'MDCTO' => round($mdcto_total, 2),
        //     'MNETO' => round($mneto_total, 2),
        //     'MIGV' => round($migv_total, 2),
        //     'MVALVEN' => round($mtopventa - $migv_total, 2),
        // ]);
        
        // return redirect()->route('detpe', ['MNSERIE' => $request->input('MNSERIE'), 'MNROPED' => $request->input('MNROPED')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detpe  $detpe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detpe $detpe)
    {
        //
    }
}
