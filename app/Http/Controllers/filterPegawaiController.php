<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Biodata;

class filterPegawaiController extends Controller
{
    public function filterAgamaDataPegawai()
    {
        $data = Biodata::all();
        return view('admin.filterAgama', compact('data'));
    }

    public function filterGolDataPegawai(Request $request)
    {
        if ($request->has('gol')) {
            if ($request->gol == "null") {
                $data = Biodata::all();
                $find = null;
            } else {
                $data = Biodata::where('golongan', $request->gol)->get();
                $find = $request->gol;
            }
        } else {
            $data = Biodata::all();
            $find = null;
        }

        return view('admin.filterGolongan', compact('data', 'find'));
    }

    public function filterPangkatDataPegawai()
    {
        $data = Biodata::all();
        return view('admin.filterPangkat', compact('data'));
    }

    public function filterJkDataPegawai()
    {
        $data = Biodata::all();
        return view('admin.filterJk', compact('data'));
    }

    //USER//

    public function filterAgamaDataPegawai_User()
    {
        $data = Biodata::all();
        return view('user.fil_Agama', compact('data'));
    }

    public function filterGolDataPegawai_User(Request $request)
    {
        if ($request->has('gol')) {
            if ($request->gol == "null") {
                $data = Biodata::all();
                $find = null;
            } else {
                $data = Biodata::where('golongan', $request->gol)->get();
                $find = $request->gol;
            }
        } else {
            $data = Biodata::all();
            $find = null;
        }

        return view('user.fil_Golongan', compact('data', 'find'));
    }

    public function filterPangkatDataPegawai_User()
    {
        $data = Biodata::all();
        return view('user.fil_Pangkat', compact('data'));
    }

    public function filterJkDataPegawai_User()
    {
        $data = Biodata::all();
        return view('user.fil_Jk', compact('data'));
    }


}           
