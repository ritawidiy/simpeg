<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Mastergolonganpangkat;
use App\Model\Biodata;

class penjagaanController extends Controller
{
    public function naikpangkatreguler()
    {
        $data = Biodata::whereYear('tgl_masuk_kerja', '>', 3)->whereYear('tmt_pangkat', '>', 3)->get();
        return view('admin.naikpangkatreg', compact('data'));
    }

    public function naikpangkatpilihan()
    {
        $data = Biodata::whereYear('tmt_jabatan', '>', 1)->wherenotnull('jabatan')->get();
        return view('admin.naikpangkatpilih', compact('data'));
    }

    public function naikgajiberkala()
    {
        $data = Biodata::whereYear('tmt_kgb', '>', 0)->get();
        return view('admin.naikgajiberkala', compact('data'));
    }

    public function sks10()
    {
        $data = Biodata::all();
        return view('admin.bio_sks10thn', compact('data'));
    }

    public function sks20()
    {
        $data = Biodata::all();
        return view('admin.bio_sks20thn', compact('data'));
    }

    public function sks30()
    {
        $data = Biodata::all();
        return view('admin.bio_sks30thn', compact('data'));
    }

    public function usiapensiun()
    {
        $data = Biodata::whereYear('tgl_lahir', '>', 58)->get();
        return view('admin.usiapensiun', compact('data'));
    }

    public function naiktk2d()
    {
        $data = Biodata::where('tk2d', false)->get();
        return view('admin.naiktk2d', compact('data'));
    }


    //USER//

    public function reg_naikpngkt()
    {
        $data = Biodata::whereYear('tgl_masuk_kerja', '>', 3)->whereYear('tmt_pangkat', '>', 3)->get();
        return view('user.reg_Naikpngkt', compact('data'));
    }

    public function pil_naikpangkat()
    {
        $data = Biodata::whereYear('tmt_jabatan', '>', 1)->wherenotnull('jabatan')->get();
        return view('user.pil_Naikpngkt', compact('data'));
    }

    public function naik_gajiberkala()
    {
        $data = Biodata::whereYear('tmt_kgb', '>', 0)->get();
        return view('user/naik_Gaji_Berkala', compact('data'));
    }

    public function sks_10()
    {
        $data = Biodata::all();
        return view('user.SKS_10', compact('data'));
    }

    public function sks_20()
    {
        $data = Biodata::all();
        return view('user.SKS_20', compact('data'));
    }

    public function SKS_30()
    {
        $data = Biodata::all();
        return view('user.SKS_30', compact('data'));
    }

    public function usia_Pensiun()
    {
        $data = Biodata::whereYear('tgl_lahir', '>', 58)->get();
        return view('user.usia_Pensiun', compact('data'));
    }

    public function naik_TK2D()
    {
        $data = Biodata::where('tk2d', false)->get();
        return view('user.naik_TK2D', compact('data'));
    }

}
