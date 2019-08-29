<?php

namespace App\Http\Controllers;

use App\Models\Cabpe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $req)
    {
        $data = [];
        $data['pedidos'] = Cabpe::where('MPERIODO', date('Ym'));
        if ($req->input('estado') == 'pendiente') {
            $data['pedidos'] = $data['pedidos']->where('estado', 'pendiente');
        } else if ($req->input('estado') == 'procesado') {
            $data['pedidos'] = $data['pedidos']->where('estado', 'procesado');
        }
        $data['pedidos'] = $data['pedidos']->paginate(15)->appends(request()->query());
        return view('dashboard', $data);
    }
}
