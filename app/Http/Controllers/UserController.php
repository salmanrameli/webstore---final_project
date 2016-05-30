<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Barang;
use App\Transaksi;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $product = Barang::all();

        return View::make('user.user_index', compact('product'));
    }
    public function show($id)
    {
        $barang = Barang::findOrFail($id);

        return view('user.user_show')->withBarang($barang);
    }
    public function store($id, Request $request)
    {
        $barang = Barang::findOrFail($id);

        $this->validate($request, [
            'user_email' => 'required',
            'barang_harga' => 'required',
            'barang_deskripsi' => 'required',
        ]);

        $input = $request->all();

        Transaksi::create($input);

        Session::flash('flash_message', 'Product successfully added!');

        return redirect()->back();
    }
    public function create()
    {
        return view('user.user_create');
    }
}
