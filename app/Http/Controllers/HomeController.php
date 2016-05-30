<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\View;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
        $product = Barang::all();

        return View::make('barang.index', compact('product'));
    }
    public function show($id)
    {
        $barang = Barang::findOrFail($id);

        return view('barang.show')->withBarang($barang);
    }
}
