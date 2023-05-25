<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\barang;

class BarangController extends Controller
{
    public function index()
    {
        $data = barang::all();
        // dd($data);
        return view('transaksi.barang',['data'=> $data]);
    }

    public function create()
    {
        return view('tambah');
    }

    public function save(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'nm_barang' => 'required',
            'harga_jual' => 'required|integer|min:10000',
            'diskon' => 'required|integer|min:0',
            'stok' => 'required|integer|min:1',
        ]);
        $validatedData['kd_barang'] = barang::generateCode();
        // dd($validatedData);
        barang::create($validatedData);
    }
}
