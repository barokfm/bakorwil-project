<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{


    public function index(){
        return view('transaksi', [
            'peralatans' => 1,
        ]);
    }
}
