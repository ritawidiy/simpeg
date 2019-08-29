<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Model\Biodata;
use App\Model\Dataanak;
use App\Model\Riwayatbahasa;
use App\Model\Riwayatcuti;
use App\Model\Riwayatdiklat;
use App\Model\Riwayatgaji;
use App\Model\Riwayathukuman;
use App\Model\Riwayatjabatan;
use App\Model\Riwayatkursus;
use App\Model\Riwayatmutasi;
use App\Model\Riwayatorganisasi;
use App\Model\Riwayatpangkat;
use App\Model\riwayatpenataran;
use App\Model\riwayatpendidikan;
use App\Model\riwayatpenghargaan;
use App\Model\riwayatpenugasan;
use App\Model\riwayatseminar;
use App\Model\Masterunitkerja;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    //admin//
    public function tampildatapegawai()
    {
        $data = Biodata::where('tk2d', false)->take(5)->get();
        return view('admin.biodata_pegawai', compact('data'));
    }

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
    public function storepegawai(Request $request)
    {
        Biodata::create([
            'nip' => $request->nip,
            'nip_lama' => $request->nip_lama,
            'gelar_depan' => $request->gelar_depan,
            'nama' => $request->nama,
            'gelar_belakang' => $request->gelar_belakang,
            'jabatan' => $request->jabatn,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'status_perkawinan' => $request->status_perkawinan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'golongan_darah' => $request->golongan_darah,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'tgl_lulus' => $request->tgl_lulus,
            'jurusan' => $request->jurusan,
            'tugas_pokok' => $request->tugas_pokok,
            'statpeg' => $request->statpeg,
            'kedudukan_kepegawaian' => $request->kedudukan_kepegawaian,
            'tempat_tugas' => $request->tempat_tugas,
            'absen' => $request->absen,
            'tk2d' => true,
        ]);

        return redirect()->route('data.pegawai');
    }

    public function storedata(Request $request)
    {
        Dataanak::create([
            'namaanak' => $request->namaanak,
            'tempatlahiranak' => $request->tempatlahiranak,
            'tgllahiranak' => $request->tgllahiranak,
            'jeniskelaminanak' => $request->jeniskelaminanak,
            'statuskeluargaanak' => $request->statuskeluargaanak,
            'statustunjangananak' => $request->statustunjangananak,
            'pendidikanumumanak' => $request->pendidikanumumanak,
            'pekerjaananak' => $request->pekerjaananak,
        ]);
        Riwayatbahasa::create([
            'namabahasa_daerah' => $request->namabahasa_daerah,
            'kemampuanbicara_bahasa' => $request->kemampuanbicara_bahasa,
            'namabahasa_asing' => $request->namabahasa_asing,
            'kemampuanbicara_asing' => $request->kemampuanbicara_asing,
        ]);
        Riwayatcuti::create([
            'jeniscuti' => $request->jeniscuti,
            'alasancuti' => $request->alasancuti,
            'alamatcuti' => $request->alamatcuti,
            'telpcuti' => $request->telpcuti,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        Riwayatdiklat::create([
            'jenisdiklat' => $request->jenisdiklat,
            'namadiklat' => $request->namadiklat,
            'tempatdiklat' => $request->tempatdiklat,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajamdiklat' => $request->lamajamdiklat,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        Riwayatgaji::craete([
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'tmtkgb' => $request->tmtkgb,
            'masakerja' => $request->masakerja,
            'gaji' => $request->gaji,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        Riwayathukuman::create([
            'jenishukuman' => $request->jenishukuman,
            'namahukuman' => $request->namahukuman,
            'sanksi' => $request->sanksi,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        Riwayatjabatan::craete([
            'jenisjabatan' => $request->jenisjabatan,
            'namajabatan' => $request->namajabatan,
            'nosurat' => $request->nosurat,
            'tmt' => $request->tmt,
            'pejabat' => $request->pejabat,
            'eselon' => $request->eselon,
            'jenismutasi' => $request->jenismutasi,
            'unitkerja' => $request->unitkerja,
        ]);
        Riwayatkursus::create([
            'jeniskursus' => $request->jeniskursus,
            'namakursus' => $request->namakursus,
            'tempatkursus' => $request->tempatkursus,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajamkursus' => $request->lamajamkursus,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        Riwayatorganisasi::create([
            'jenisorganisasi' => $request->jenisorganisasi,
            'namaorganisasi' => $request->namaorganisasi,
            'jabatanorganisasi' => $request->jabatanorganisasi,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'nama_pimpinan' => $request->nama_pimpinan,
            'tempatorganisasi' => $request->tempatorganisasi,
        ]);
        Riwayatpangkat::create([
            'pangkat' => $request->pangkat,
            'tmtpangkat' => $request->tmtpangkat,
            'pejabat' => $request->pejabat,
            'masatahun' => $request->masatahun,
            'masabulan' => $request->masabulan,
            'gaji' => $request->gaji,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
        ]);
        riwayatpenataran::create([
            'jenispenataran' => $request->jenispenataran,
            'namapenataran' => $request->namapenataran,
            'tempatpenataran' => $request->tempatpenataran,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajampenataran' => $request->lamajampenataran,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        riwayatpendidikan::create([
            'tingkatpendidikan' => $request->jenispenataran,
            'jurusan' => $request->jurusan,
            'namasekolah' => $request->namasekolah,
            'alamatsekolah' => $request->alamatsekolah,
            'noijazah' => $request->noijazah,
            'tanggalijazah' => $request->tanggalijazah,
            'tahunmasuk' => $request->tahunmasuk,
            'tahunlulus' => $request->tahunlulus,
        ]);
        riwayatpenghargaan::create([
            'namapenghargaan' => $request->namapenghargaan,
            'asal' => $request->asal,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        riwayatpenugasan::create([
            'jenispenugasan' => $request->jenispenugasan,
            'namapenugasan' => $request->namapenugasan,
            'tempatpenugasan' => $request->tempatpenugasan,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamapenugasan' => $request->lamapenugasan,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        riwayatseminar::create([
            'jenisseminar' => $request->jenisseminar,
            'namaseminar' => $request->namaseminar,
            'tempatseminar' => $request->tempatseminar,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamaseminar' => $request->lamaseminar,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return redirect()->route('data.pegawai');
    }

    public function edit($id)
    {
        $data = Biodata::where('id', $id)->first();
        $data1 = Dataanak::where('nip', $data->nip)->get();
        $data2 = Riwayatbahasa::where('nip', $data->nip)->get();
        $data3 = Riwayatcuti::where('nip', $data->nip)->get();
        $data4 = Riwayatdiklat::where('nip', $data->nip)->get();
        $data5 = Riwayatgaji::where('nip', $data->nip)->get();
        $data6 = Riwayathukuman::where('nip', $data->nip)->get();
        $data7 = Riwayatjabatan::where('nip', $data->nip)->get();
        $data8 = Riwayatkursus::where('nip', $data->nip)->get();
        $data9 = Riwayatmutasi::where('nip', $data->nip)->get();
        $data10 = Riwayatorganisasi::where('nip', $data->nip)->get();
        $data11 = Riwayatpangkat::where('nip', $data->nip)->get();
        $data12 = riwayatpenataran::where('nip', $data->nip)->get();
        $data13 = riwayatpendidikan::where('nip', $data->nip)->get();
        $data14 = riwayatpenghargaan::where('nip', $data->nip)->get();
        $data15 = riwayatpenugasan::where('nip', $data->nip)->get();
        $data16 = riwayatseminar::where('nip', $data->nip)->get();
        // dd($data);//Tekan ctrl+ ? utk lihat data udah diisi/belum//
        return view('admin.editpegawai', compact('data'));
    }

    public function update(Request $request)
    {
        //Simpan Edit Pegawai
        // dd($request->toArray());
        $request->validate([ //wajib input//
            'nip' => 'required',
            'nama' => 'required'
        ]);
        $data = Biodata::find($request->nip);
        $data1 = Dataanak::find($request->nip);
        $data2 = Riwayatbahasa::find($request->nip);
        $data3 = Riwayatcuti::find($request->nip);
        $data4 = Riwayatdiklat::find($request->nip);
        $data5 = Riwayatgaji::find($request->nip);
        $data6 = Riwayathukuman::find($request->nip);
        $data7 = Riwayatjabatan::find($request->nip);
        $data8 = Riwayatkursus::find($request->nip);
        $data9 = Riwayatmutasi::find($request->nip);
        $data10 = Riwayatorganisasi::find($request->nip);
        $data11 = Riwayatpangkat::find($request->nip);
        $data12 = riwayatpenataran::find($request->nip);
        $data13 = riwayatpendidikan::find($request->nip);
        $data14 = riwayatpenghargaan::find($request->nip);
        $data15 = riwayatpenugasan::find($request->nip);
        $data16 = riwayatseminar::find($request->nip);

        $data->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'status_perkawinan' => $request->status_perkawinan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'golongan_darah' => $request->golongan_darah,
            'agama' => $request->agama,
            'namabahasa_daerah' => $request->namabahasa_daerah,
            'kemampuanbicara_bahasa' => $request->kemampuanbicara_bahasa,
            'namabahasa_asing' => $request->namabahasa_asing,
            'kemampuanbicara_asing' => $request->kemampuanbicara_asing,
            'jeniscuti' => $request->jeniscuti,
            'alasancuti' => $request->alasancuti,
            'alamatcuti' => $request->alamatcuti,
            'telpcuti' => $request->telpcuti,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'jenisdiklat' => $request->jenisdiklat,
            'namadiklat' => $request->namadiklat,
            'tempatdiklat' => $request->tempatdiklat,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajamdiklat' => $request->lamajamdiklat,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'tmtkgb' => $request->tmtkgb,
            'masakerja' => $request->masakerja,
            'gaji' => $request->gaji,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'jenishukuman' => $request->jenishukuman,
            'namahukuman' => $request->namahukuman,
            'sanksi' => $request->sanksi,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'jenisjabatan' => $request->jenisjabatan,
            'namajabatan' => $request->namajabatan,
            'nosurat' => $request->nosurat,
            'tmt' => $request->tmt,
            'pejabat' => $request->pejabat,
            'eselon' => $request->eselon,
            'jenismutasi' => $request->jenismutasi,
            'unitkerja' => $request->unitkerja,
            'jeniskursus' => $request->jeniskursus,
            'namakursus' => $request->namakursus,
            'tempatkursus' => $request->tempatkursus,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajamkursus' => $request->lamajamkursus,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'jenisorganisasi' => $request->jenisorganisasi,
            'namaorganisasi' => $request->namaorganisasi,
            'jabatanorganisasi' => $request->jabatanorganisasi,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'nama_pimpinan' => $request->nama_pimpinan,
            'tempatorganisasi' => $request->tempatorganisasi,
            'pangkat' => $request->pangkat,
            'tmtpangkat' => $request->tmtpangkat,
            'pejabat' => $request->pejabat,
            'masatahun' => $request->masatahun,
            'masabulan' => $request->masabulan,
            'gaji' => $request->gaji,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'jenispenataran' => $request->jenispenataran,
            'namapenataran' => $request->namapenataran,
            'tempatpenataran' => $request->tempatpenataran,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajampenataran' => $request->lamajampenataran,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'tingkatpendidikan' => $request->jenispenataran,
            'jurusan' => $request->jurusan,
            'namasekolah' => $request->namasekolah,
            'alamatsekolah' => $request->alamatsekolah,
            'noijazah' => $request->noijazah,
            'tanggalijazah' => $request->tanggalijazah,
            'tahunmasuk' => $request->tahunmasuk,
            'tahunlulus' => $request->tahunlulus,
            'namapenghargaan' => $request->namapenghargaan,
            'asal' => $request->asal,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'jenispenugasan' => $request->jenispenugasan,
            'namapenugasan' => $request->namapenugasan,
            'tempatpenugasan' => $request->tempatpenugasan,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamapenugasan' => $request->lamapenugasan,
            'tglsk' => $request->tglsk,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
            'jenisseminar' => $request->jenisseminar,
            'namaseminar' => $request->namaseminar,
            'tempatseminar' => $request->tempatseminar,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamaseminar' => $request->lamaseminar,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return redirect()->route('data.pegawai');

        // return redirect()->route('admin.biodata_pegawai');

        // return redirect()->route('donesubmitedit')->with('alert-success', 'Data berhasil diubah!');

    }

    public function generatePDF($ids)
    {
        $bio_ids = explode(",", $ids);
        $data = Biodata::whereIn('nip', $bio_ids)->get();
        return view('reports.biodata-pdf', compact('data'));
    }

    public function massDelete(Request $request)
    {
        // delete
        $datas = Biodata::whereIn('nip', explode(",", $request->bio_ids))->get();
        foreach ($datas as $data) {
            $data1 = Dataanak::where('nip', $data->nip)->first();
            $data2 = Riwayatbahasa::where('nip', $data->nip)->first();
            $data3 = Riwayatcuti::where('nip', $data->nip)->first();
            $data4 = Riwayatdiklat::where('nip', $data->nip)->first();
            $data5 = Riwayatgaji::where('nip', $data->nip)->first();
            $data6 = Riwayathukuman::where('nip', $data->nip)->first();
            $data7 = Riwayatjabatan::where('nip', $data->nip)->first();
            $data8 = Riwayatkursus::where('nip', $data->nip)->first();
            $data9 = Riwayatmutasi::where('nip', $data->nip)->first();
            $data10 = Riwayatorganisasi::where('nip', $data->nip)->first();
            $data11 = Riwayatpangkat::where('nip', $data->nip)->first();
            $data12 = riwayatpenataran::where('nip', $data->nip)->first();
            $data13 = riwayatpendidikan::where('nip', $data->nip)->first();
            $data14 = riwayatpenghargaan::where('nip', $data->nip)->first();
            $data15 = riwayatpenugasan::where('nip', $data->nip)->first();
            $data16 = riwayatseminar::where('nip', $data->nip)->first();

            $data->delete();
            if ($data1 != "") {
                $data1->delete();
            }
            if ($data2 != "") {
                $data2->delete();
            }
            if ($data3 != "") {
                $data3->delete();
            }
            if ($data4 != "") {
                $data4->delete();
            }
            if ($data5 != "") {
                $data5->delete();
            }
            if ($data6 != "") {
                $data6->delete();
            }
            if ($data7 != "") {
                $data7->delete();
            }
            if ($data8 != "") {
                $data8->delete();
            }
            if ($data9 != "") {
                $data9->delete();
            }
            if ($data10 != "") {
                $data10->delete();
            }
            if ($data11 != "") {
                $data11->delete();
            }
            if ($data12 != "") {
                $data12->delete();
            }
            if ($data13 != "") {
                $data13->delete();
            }
            if ($data14 != "") {
                $data14->delete();
            }
            if ($data15 != "") {
                $data15->delete();
            }
            if ($data16 != "") {
                $data16->delete();
            }
        }
        return back()->with('success', '' . count($datas) . ' biodata pegawai berhasil dihapus!');
    }

    public function show($id)
    {
        // Detail Siswa
        $data = Biodata::find($id);
        $anaks = $data->getDataAnak;
        // $data1 = Dataanak::where('nip','=',$data->nip)->get();
        // //dd($data1);
        // $data2 = Riwayatbahasa::where('nip','=',$data->nip)->get();
        // $data3 = Riwayatcuti::where('nip','=',$data->nip)->first();
        // $data4 = Riwayatdiklat::where('nip','=',$data->nip)->get();
        // $data5 = Riwayatgaji::where('nip','=',$data->nip)->get();
        // $data6 = Riwayathukuman::where('nip','=',$data->nip)->first();
        // $data7 = Riwayatjabatan::where('nip','=',$data->nip)->get();
        // $data8 = Riwayatkursus::where('nip','=',$data->nip)->get();
        // // $data9 = Riwayatmutasi::find($nip);
        // $data10 = Riwayatorganisasi::where('nip','=',$data->nip)->first();
        // $data11 = Riwayatpangkat::where('nip','=',$data->nip)->get();
        // $data12 = riwayatpenataran::where('nip','=',$data->nip)->first();
        // $data13 = riwayatpendidikan::where('nip','=',$data->nip)->get();
        // $data14 = riwayatpenghargaan::where('nip','=',$data->nip)->get();
        // $data15 = riwayatpenugasan::where('nip','=',$data->nip)->first();
        // $data16 = riwayatseminar::where('nip','=',$data->nip)->first();

        return view('admin.view', compact('data', 'anaks'));
    }

    public function search(Request $request)
    {
        $bio = Biodata::whereRaw('("nip" LIKE \'%' . $request->q . '%\')')->where('tk2d', true);
        $data = $bio->paginate(20);
        $count = $bio->count();
        return view('admin.biodata_pegawai', compact('data', 'count'));

    }

    public function filter(Request $request)
    {
        $bio = Biodata::when($request->nip, function ($query) use ($request) {
            $query->whereRaw(('("nip" LIKE \'%' . $request->nip . '%\')'));
        })->when($request->nama, function ($query) use ($request) {
            $query->whereRaw(('("nama" LIKE \'%' . $request->nama . '%\')'));
        });
    }


    //user//
    public function indexuser()
    {
        $bio = Biodata::where('tk2d', false)->get();
        return view('user/bio_Pegawai', array('bio' => $bio));
    }

}
