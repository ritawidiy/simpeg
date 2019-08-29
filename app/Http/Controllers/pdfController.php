<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Biodata;
use DB;
use Barryvdh\DomPDF\Facade as PDF;
use phpDocumentor\Reflection\Types\This;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class pdfController extends Controller
{
    public function cetakindividupegawai($nip)
    {
        $data = Biodata::find($nip);
        return view('admin.printindividu_peg', compact('data'));
    }

    public function print(Request $request)
    {
        $type = $request->unitkerja;
        return $this->cetaksemua_peg($type);
    }

    public function cetaksemua_peg($type)
    {
        if ($type == 'all') {
            $data = Biodata::all();
        } else {
            $data = Biodata::where('unitkerja', $type)->get();
        }
        $pdf = \PDF::loadView("admin.printsemua_peg", $data);
        return $pdf->stream();
    }

    public function cetakindividutk2d($nip)
    {
        $data = Biodata::find($nip);
        return view('admin.printindividu_tk2d', compact('data'));
    }
}