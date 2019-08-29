<?php

namespace App\Http\Controllers;

use App\Models\Cabpe;
use App\Models\Detpe;
use App\Models\Ccmcli;
use App\Models\Ccmcpa;
use App\Models\Famdfa;
use App\Mail\PedidoProcesado;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CabpeController extends Controller
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
     * @param  \App\Models\Cabpe  $cabpe
     * @return \Illuminate\Http\Response
     */
    public function show(Detpe $detpe, $mnserie, $mnroped)
    {   
        $cabpe = Cabpe::where('MNSERIE', $mnserie)->where('MNROPED', $mnroped)->first();
        $detpes = $detpe::where('MNSERIE', $mnserie)->where('MNROPED', $mnroped)->get();
        return view('detpe.index', ['detpes' => $detpes, 'cabpe' => $cabpe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cabpe  $cabpe
     * @return \Illuminate\Http\Response
     */
    public function edit($mnserie, $mnroped)
    {
        $detpe = Detpe::where('MNSERIE', $mnserie)->where('MNROPED', $mnroped)->first();
        $famdfa = Famdfa::where('MCODDFA', $detpe['MCODDFA'])->first();
        $famdfas = Famdfa::paginate(15);
        return view('detpe.edit', ['detpe' => $detpe, 'famdfa' => $famdfa, 'famdfas' => $famdfas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cabpe  $cabpe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $famdfa = Famdfa::where('MCODDFA', $request->input('MCODDFA'))->first();
        $detpes = Detpe::where('MNSERIE', $request->input('MNSERIE'))->where('MNROPED', $request->input('MNROPED'))->get();
        foreach ($detpes as $detpe) {
            if ($detpe['MCODDFA'] == 'Bono') {
                continue;
            }
            $fam = Famdfa::where('MCODDFA', $detpe['MCODDFA'])->first();
            $mdescrip = $detpe['MCODDFA'] == 'Sin descuento' || $detpe['MCODDFA'] == null ? $famdfa['MDESCRIP'] : substr($fam['MDESCRIP'], 0, -1).'+'.$famdfa['MDESCRIP'];
            $f = Famdfa::where('MDESCRIP', $mdescrip)->first();
            $mdcto = $detpe['MVALVEN'] * $f['MPOR_DFA'] / 100;
            $mneto = $detpe['MVALVEN'] - $mdcto;
            $detpe->update([
                'MCODDFA' => $f['MCODDFA'],
                'MPORDCT1' => $f['MPOR_DFA'],
                'MDCTOPRD' => round($mdcto, 2),
                'MDCTO' => round($mdcto, 2),
                'MIGV' => round($mneto - ($mneto / 1.18), 2),
            ]);
        }
        $cab = Cabpe::where('MNSERIE', $request->input('MNSERIE'))->where('MNROPED', $request->input('MNROPED'))->first();
        $dets = Detpe::where('MNSERIE', $request->input('MNSERIE'))->where('MNROPED', $request->input('MNROPED'))->get();
        $mtopventa = 0.0;
        $mdcto_total = 0.0;
        foreach ($dets as $d) {
            if ($d['MCODDFA'] == 'Bono') {
                continue;
            } else {
                $mtopventa = $mtopventa + $d['MVALVEN'];
                $mdcto_total = $mdcto_total + $d['MDCTO'];
            }
        }
        $mneto_total = $mtopventa - $mdcto_total;
        $migv_total = $mneto_total - ($mneto_total / 1.18);

        $cab->update([
            'MTOPVENTA' => round($mtopventa, 2),
            'MDCTO' => round($mdcto_total, 2),
            'MNETO' => round($mneto_total, 2),
            'MIGV' => round($migv_total, 2),
            'MVALVEN' => round($mtopventa - $migv_total, 2),
        ]);
        return redirect()->route('detpe', ['mnserie' => $request->input('MNSERIE'), 'mnroped' => $request->input('MNROPED')]);
    }

    public function email($mnserie, $mnroped) {
        $cab = Cabpe::where('MNSERIE', $mnserie)->where('MNROPED', $mnroped)->join('ccmcpa', 'cabpe.MCODCPA', '=', 'ccmcpa.MCONDPAGO')->select('cabpe.*', 'ccmcpa.MABREVI')->first();
        $dets = Detpe::where('MNSERIE', $mnserie)->where('MNROPED', $mnroped)->join('famdfa', 'detpe.MCODDFA', '=', 'famdfa.MCODDFA')->get();
        $ccmcli = Ccmcli::where('MCODCLI', $cab['MCODCLI'])->first();
        $info = [
            'fecha' => date('d/m/Y'),
            'periodo' => date('Y/m'),
            'mnroped' => $cab['MNSERIE'].'-'.$cab['MNROPED'],
            'mcodven' => $cab['MCODVEN'], 
            'ruc' => $cab['MCODCLI'],
            'cliente' => $cab['MNOMCLI'],
            'canal' => $ccmcli['MCODCADI'],
            'direccion' => $ccmcli['MDIRECC'],
            'email' => $ccmcli['MCORREO'],
            'condicion' => $cab['MABREVI'],
            'articulos' => $dets,
            'total' => round($cab['MNETO'], 2),
        ];

        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'debugPng' => true, 'defaultFont' => 'sans-serif']);
        $document = PDF::loadView('attach.pedido', $info);
        $output = $document->output();
        $data = array('nombre' => $ccmcli['MNOMBRE'], 'mtopventa' => round($cab['MTOPVENTA'], 2));
        Mail::send('emails.mail', $data, function ($message) use ($ccmcli, $output) {
            $message->to('rcotillo@cotillo.tech', $ccmcli['MNOMBRE'])->subject('Pedido en proceso');
            $message->from('recep_pedidos@filtroswillybusch.com.pe', 'Filtros Willy Busch');
            $message->attachData($output, 'pedido.pdf');
        });
        Cabpe::where('MNSERIE', $mnserie)->where('MNROPED', $mnroped)->update([
            'estado' => 'procesado',
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cabpe  $cabpe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabpe $cabpe)
    {
        //
    }
}
