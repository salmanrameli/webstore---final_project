<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Barang;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $product = Barang::all();

        return view('barang.index')->withProduct($product);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'barang_nama' => 'required',
            'barang_harga' => 'required',
            'barang_deskripsi' => 'required',
        ]);

        $input = $request->all();

        Barang::create($input);

        Session::flash('flash_message', 'Product successfully added!');

        return redirect()->back();
    }
    public function create()
    {
        return view('barang.create');
    }
    public function destroy($nama)
    {
        $barang = Barang::findOrFail($nama);

        $barang->delete();

        Session::flash('flash_message', 'Product successfully deleted!');

        return redirect()->route('barang.index');
    }
    public function update($id, Request $request)
    {
        $barang = Barang::findOrFail($id);

        $this->validate($request, [
            'barang_nama' => 'required',
            'barang_harga' => 'required',
            'barang_deskripsi' => 'required',
        ]);

        $input = $request->all();

        $barang->fill($input)->save();

        Session::flash('flash_message', 'Barang successfully added!');

        return redirect()->back();
    }
    public function show($id)
    {
        $barang = Barang::findOrFail($id);

        return view('barang.show')->withBarang($barang);
    }
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);

        return view('barang.edit')->withBarang($barang);
    }
}
