<?php

namespace App\Http\Controllers;

use App\Models\jasaservice;
use Illuminate\Http\Request;

class JasaserviceController extends Controller
{
    public function index()
    {
        $data = jasaservice::all();
        // dd($data);
        return view('transaksi.jasaservice',['data'=> $data]);
    }
}
