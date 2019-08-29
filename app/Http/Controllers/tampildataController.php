<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class tampildataController extends Controller
{


    public function create()
    {
        return view('admin/tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'nip' => 'required',
                'nip_lama' => 'required',
                'nama' => 'required',
                'tgl_lahir' => 'required',
                'tempat_lahir' => 'required',
                'status_pernikahan' => 'required',
                'jenis_kelamin' => 'required',
                'golongan_darah' => 'required',
                'agama' => 'required',
                'pendidikan' => 'required',
                'tgl_lulus' => 'required',
                'jurusan' => 'required',
                'tugas_pokok' => 'required',
                'status_kepegawaian' => 'required',
                'kedudukan_kepegawaian' => 'required',
                'tempat_tugas' => 'required',
                'absen' => 'required',
            ]);
            $data = new Biodata();
            $data->nip = $request->nip;
            $data->nip__lama = $request->nip_lama;
            $data->nama = $request->nama;
            $data->tgl_lahir = $request->tgl_lahir;
            $data->tempat_lahir = $request->tempat_lahir;
            $data->status_pernikahan = $request->status_pernikahan;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->golongan_darah = $request->golongan_darah;
            $data->agama = $request->agama;
            $data->pendidikan = $request->pendidikan;
            $data->tgl_lulus = $request->tgl_lulus;
            $data->jurusan = $request->jurusan;
            $data->tugas_pokok = $request->tugas_pokok;
            $data->status_kepegawaian = $request->status_kepegawaian;
            $data->kedudukan_kepegawaian = $request->kedudukan_kepegawaian;
            $data->tempat_tugas = $request->tempat_tugas;
            $data->absen = $request->absen;
            $data->save();
            DB::commit();
        } catch (\Illuminate\Database\QueryException $e) {
            dd($e);
            DB::rollback();
        }
        return redirect('bagian');
    }
}
