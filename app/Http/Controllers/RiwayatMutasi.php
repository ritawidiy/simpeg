<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatMutasi extends Controller
{
    public function showRiwayatMutasi()
    {
        return view('admin.riwayat-mutasi');
    }
}
