<?php

namespace App\Http\Controllers;

use App\PdfViewer;
use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;
use Illuminate\Support\Facades\Storage;

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
        // set_time_limit(300);
        // $pdf_file = $request->file('pdf');
        // if ($pdf_file) {
        //     $pdf = new Pdf($pdf_file);
        //     $pages = $pdf->getNumberOfPages();
        //     $files = Storage::allFiles(storage_path() . '.pdf');
        //     Storage::delete($files);
        //     for ($i = 1; $i <= $pages; $i++) {
        //         $image_name = str_pad($i, 4, '0', STR_PAD_LEFT);
        //         $pdf->setPage($i)->saveImage(storage_path() . '/pdf', $image_name);
        //     }
        // }
        // return back();

        $text = $request->json()->all();
        info($text);
    }

    public function save_text(Request $request) {
        set_time_limit(300);
        $text = $request->json()->all();
        foreach ($text as $key => $value) {
            $pdf_viewer = PdfViewer::create([
                'text' => $value
            ]);
        }
        return response()->json([], 200);
    }

    public function search() {
        $search = request('search');
        $code = request('code');
        if ($search) {
            $search = strtoupper($search);
            $found = PdfViewer::where('text', 'LIKE', '%'.$search.'%')->get();

            foreach ($found as $value) {
                $value->text = substr($value->text, strpos($value->text, $search), 20);
            }
            return response()->json([
                'pages' => $found,
            ], 200);
        }

        if ($code) {
            $found = PdfViewer::where('text', 'LIKE', '%'.$code.'%')->select('id')->get();
            return response()->json([
                'pages' => $found,
            ], 200);
        }

        return response()->json([
            'pages' => [],
        ], 200);
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
