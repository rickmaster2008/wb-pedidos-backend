<?php

namespace App\Http\Controllers;

use App\PdfViewer;
use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;

class PdfViewerController extends Controller
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
        return view('pdfviewer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        set_time_limit(300);
        $pdf_file = $request->file('pdf');
        if ($pdf_file) {
            $pdf = new Pdf($pdf_file);
            $pages = $pdf->getNumberOfPages();
            for ($i = 1; $i <= $pages; $i++) {
                $image_name = str_pad($i, 4, '0', STR_PAD_LEFT);
                $pdf->setPage($i)->saveImage(storage_path() . '/pdf', $image_name);
            }
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PdfViewer  $pdfViewer
     * @return \Illuminate\Http\Response
     */
    public function show(PdfViewer $pdfViewer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PdfViewer  $pdfViewer
     * @return \Illuminate\Http\Response
     */
    public function edit(PdfViewer $pdfViewer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PdfViewer  $pdfViewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PdfViewer $pdfViewer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PdfViewer  $pdfViewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(PdfViewer $pdfViewer)
    {
        //
    }
}
