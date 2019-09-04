<?php

namespace App\Http\Controllers;

use App\Model\Riwayatgaji;
use App\Model\Riwayathukuman;
use App\Model\Riwayatjabatan;
use App\Model\Riwayatkursus;
use App\Model\Riwayatorganisasi;
use App\Model\Riwayatpangkat;
use App\Model\riwayatpenataran;
use App\Model\riwayatpendidikan;
use App\Model\riwayatpenghargaan;
use App\Model\riwayatpenugasan;
use App\Model\riwayatseminar;
use Illuminate\Http\Request;
use App\Model\Dataanak;
use App\Model\Riwayatbahasa;
use App\Model\Riwayatcuti;
use App\Model\Riwayatdiklat;

class riwayatController extends Controller
{
    public function createDataAnak(Request $request)
    {
        Dataanak::create([
            'nip' => $request->nip,
            'namaanak' => $request->namaanak,
            'tempatlahiranak' => $request->tempatlahiranak,
            'tgllahiranak' => $request->tgllahiranak,
            'jeniskelaminanak' => $request->jeniskelaminanak,
            'statuskeluargaanak' => $request->statuskeluargaanak,
            'statustunjangananak' => $request->statustunjangananak,
            'pendidikanumumanak' => $request->pendidikanumumanak,
            'pekerjaananak' => $request->pekerjaananak,
            'kodeusulan' => $request->kodeusulan,
        ]);

        return back()->with('success', 'Data anak [' . $request->nip . '] berhasil ditambahkan!');
    }

    public function editDataAnak($id)
    {
        return Dataanak::find($id);
    }

    public function updateDataAnak(Request $request, $id)
    {
        $data = Dataanak::find($id);
        $data->update([
            'nip' => $request->nip,
            'namaanak' => $request->namaanak,
            'tempatlahiranak' => $request->tempatlahiranak,
            'tgllahiranak' => $request->tgllahiranak,
            'jeniskelaminanak' => $request->jeniskelaminanak,
            'statuskeluargaanak' => $request->statuskeluargaanak,
            'statustunjangananak' => $request->statustunjangananak,
            'pendidikanumumanak' => $request->pendidikanumumanak,
            'pekerjaananak' => $request->pekerjaananak,
            'kodeusulan' => $request->kodeusulan,
        ]);

        return back()->with('success', 'Data anak [' . $data->nip . '] berhasil diperbarui!');
    }

    public function deleteDataAnak($id)
    {
        $data = Dataanak::find($id);
        $data->delete();

        return back()->with('success', 'Data anak [' . $data->nip . '] berhasil diperbarui!');
    }

    public function createDataBahasa(Request $request)
    {
        Riwayatbahasa::create([
            'nip' => $request->nip,
            'namabahasa_daerah' => $request->namabahasa_daerah,
            'kemampuanbicara_daerah' => $request->kemampuanbicara_daerah,
            'namabahasa_asing' => $request->namabahasa_asing,
            'kemampuanbicara_asing' => $request->kemampuanbicara_asing,
            'kodeusulan' => $request->kodeusulan,
        ]);

        return back()->with('success', 'Data bahasa [' . $request->nip . '] berhasil ditambahkan!');
    }

    public function editDataBahasa($id)
    {
        return Riwayatbahasa::find($id);
    }

    public function updateDataBahasa(Request $request, $id)
    {
        $data = Riwayatbahasa::find($id);
        $data->update([
            'nip' => $request->nip,
            'namabahasa_daerah' => $request->namabahasa_daerah,
            'kemampuanbicara_daerah' => $request->kemampuanbicara_daerah,
            'namabahasa_asing' => $request->namabahasa_asing,
            'kemampuanbicara_asing' => $request->kemampuanbicara_asing,
            'kodeusulan' => $request->kodeusulan,
        ]);

        return back()->with('success', 'Data bahasa [' . $data->nip . '] berhasil diperbarui!');
    }

    public function deleteDataBahasa($id)
    {
        $data = Riwayatbahasa::find($id);
        $data->delete();

        return back()->with('success', 'Data anak [' . $data->nip . '] berhasil diperbarui!');
    }

    public function createDataCuti(Request $request)
    {
        Riwayatcuti::create([
            'nip' => $request->nip,
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
            'kodeusulan' => $request->kodeusulan,
        ]);

        return back();
    }

    public function editDataCuti($id)
    {
        return Riwayatcuti::find($id);
    }

    public function updateDataCuti(Request $request, $id)
    {
        $data = Riwayatcuti::find($id);
        $data->update([
            'nip' => $request->nip,
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
            'kodeusulan' => $request->kodeusulan,
        ]);

        return back();
    }

    public function deleteDataCuti($id)
    {
        Riwayatcuti::destroy($id);

        return back();
    }

    public function createDataDiklat(Request $request)
    {
        Riwayatdiklat::create([
            'nip' => $request->nip,
            'jenisdiklat' => $request->jenisdiklat, 'namadiklat' => $request->namadiklat,
            'tempatdiklat' => $request->tempatdiklat, 'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan, 'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai, 'lamajamdiklat' => $request->lamajamdiklat,
            'nosk' => $request->nosk, 'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat, 'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu, 'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu, 'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu, 'kodeusulan' => $request->kodeusulan,
            'ijazahsertifikat' => $request->ijazahsertifikat, 'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return back();
    }

    public function editDataDiklat($id)
    {
        return Riwayatdiklat::find($id);
    }

    public function updateDataDiklat(Request $request, $id)
    {
        $data = Riwayatdiklat::find($id);
        $data->update([
            'nip' => $request->nip,
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
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'kodeusulan' => $request->kodeusulan,
            'ijazahsertifikat' => $request->ijazahsertifikat,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);

        return back();
    }

    public function deleteDataDiklat($id)
    {
        Riwayatdiklat::destroy($id);

        return back();
    }

    //GAJI
    public function createDataGaji(Request $request)
    {
        Riwayatgaji::create([
            'nip' => $request->nip,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'tglsurat' => $request->tglsurat,
            'tmtkgb' => $request->tmtkgb,
            'masakerja' => $request->masakerja,
            'gaji' => $request->gaji,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'kodeusulan' => $request->kodeusulan,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return back();
    }

    public function editDataGaji($id)
    {
        return Riwayatgaji::find($id);
    }

    public function updateDataGaji(Request $request, $id)
    {
        $data = Riwayatgaji::find($id);
        $data->update([
            'nip' => $request->nip,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'tglsurat' => $request->tglsurat,
            'tmtkgb' => $request->tmtkgb,
            'masakerja' => $request->masakerja,
            'gaji' => $request->gaji,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'kodeusulan' => $request->kodeusulan,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);

        return back();
    }

    public function deleteDataGaji($id)
    {
        Riwayatgaji::destroy($id);
        return back();
    }

    public function createDataHukuman(Request $request)
    {
        Riwayathukuman::create([
            'nip' => $request->nip,
            'jenishukuman' => $request->jenishukuman,
            'namahukuman' => $request->namahukuman,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'sanksi' => $request->sanksi,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'kodeusulan' => $request->kodeusulan,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,

        ]);
        return back();
    }

    public function editDataHukuman($id)
    {
        return Riwayathukuman::find($id);
    }

    public function updateDataHukuman(Request $request, $id)
    {
        $data = Riwayathukuman::find($id);
        $data->update([
            'nip' => $request->nip,
            'jenishukuman' => $request->jenishukuman,
            'namahukuman' => $request->namahukuman,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'sanksi' => $request->sanksi,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'kodeusulan' => $request->kodeusulan,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);

        return back();
    }

    public function deleteDataHukuman($id)
    {
        Riwayathukuman::destroy($id);

        return back();
    }

    public function createDataJabatan(Request $request)
    {
        Riwayatjabatan::create([
            'nip' => $request->nip,
            'jenisjabatan' => $request->jenisjabatan,
            'namajabatan' => $request->namajabatan,
            'eselon' => $request->eselon,
            'tmt' => $request->tmt,
            'pejabat' => $request->pejabat,
            'nosurat' => $request->nosurat,
            'jenismutasi' => $request->jenismutasi,
            'tglsurat' => $request->tglsurat,
            'unitkerja' => $request->unitkerja,
        ]);
        return back();
    }

    public function editDataJabatan($id)
    {
        return Riwayatjabatan::find($id);
    }

    public function updateDataJabatan(Request $request, $id)
    {
        $data = Riwayatjabatan::find($id);
        $data->update([
            'nip' => $request->nip,
            'jenisjabatan' => $request->jenisjabatan,
            'namajabatan' => $request->namajabatan,
            'eselon' => $request->eselon,
            'tmt' => $request->tmt,
            'pejabat' => $request->pejabat,
            'nosurat' => $request->nosurat,
            'jenismutasi' => $request->jenismutasi,
            'tglsurat' => $request->tglsurat,
            'unitkerja' => $request->unitkerja,
        ]);

        return back();
    }

    public function deleteDataJabatan($id)
    {
        Riwayatjabatan::destroy($id);

        return back();
    }

    public function createDataKursus(Request $request)
    {
        Riwayatkursus::create([
            'nip' => $request->nip,
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
            'jabatansaatitu' => $request->jabatansaatitu,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
        ]);
        return back();
    }

    public function editDataKursus($id)
    {
        return Riwayatkursus::find($id);
    }

    public function updateDataKursus(Request $request, $id)
    {
        $data = Riwayatkursus::find($id);
        $data->update([
            'nip' => $request->nip,
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
            'jabatansaatitu' => $request->jabatansaatitu,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
        ]);

        return back();
    }

    public function deleteDataKursus($id)
    {
        Riwayatkursus::destroy($id);

        return back();
    }

    public function createDataOrganisasi(Request $request)
    {
        Riwayatorganisasi::create([
            'nip' => $request->nip,
            'jenisorganisasi' => $request->jenisorganisasi,
            'namaorganisasi' => $request->namaorganisasi,
            'jabatanorganisasi' => $request->jabatanorganisasi,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'nama_pimpinan' => $request->nama_pimpinan,
            'tempatorganisasi' => $request->tempatorganisasi,
        ]);
        return back();
    }

    public function editDataOrganisasi($id)
    {
        return Riwayatorganisasi::find($id);
    }

    public function updateDataOrganisasi(Request $request, $id)
    {
        $data = Riwayatorganisasi::find($id);
        $data->update([
            'nip' => $request->nip,
            'nip' => $request->nip,
            'jenisorganisasi' => $request->jenisorganisasi,
            'namaorganisasi' => $request->namaorganisasi,
            'jabatanorganisasi' => $request->jabatanorganisasi,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'nama_pimpinan' => $request->nama_pimpinan,
            'tempatorganisasi' => $request->tempatorganisasi,
        ]);

        return back();
    }

    public function deleteDataOrganisasi($id)
    {
        Riwayatorganisasi::destroy($id);

        return back();
    }

    public function createDataPangkat(Request $request)
    {
        Riwayatpangkat::create([
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'tmtpangkat' => $request->tmtpangkat,
            'pejabat' => $request->pejabat,
            'nosurat' => $request->nosurat,
            'jenis_kp' => $request->jeniskp,
            'kodegol' => $request->kodegol,
            'no_cb' => $request->no_cb,
            'tgl_cb' => $request->tgl_cb,
            'masatahun' => $request->masatahun,
            'masabulan' => $request->masabulan,
            'gaji' => $request->gaji,
            'kodeusulan' => $request->kodeusulan,
            'keterangan' => $request->keterangan,
            'tglsurat' => $request->tglsurat,
        ]);
        return back();
    }

    public function editDataPangkat($id)
    {
        return Riwayatpangkat::find($id);
    }

    public function updateDataPangkat(Request $request, $id)
    {
        $data = Riwayatpangkat::find($id);
        $data->update([
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'tmtpangkat' => $request->tmtpangkat,
            'pejabat' => $request->pejabat,
            'nosurat' => $request->nosurat,
            'jenis_kp' => $request->jeniskp,
            'kodegol' => $request->kodegol,
            'no_cb' => $request->no_cb,
            'tgl_cb' => $request->tgl_cb,
            'masatahun' => $request->masatahun,
            'masabulan' => $request->masabulan,
            'gaji' => $request->gaji,
            'kodeusulan' => $request->kodeusulan,
            'keterangan' => $request->keterangan,
            'tglsurat' => $request->tglsurat,
        ]);

        return back();
    }

    public function deleteDataPangkat($id)
    {
        Riwayatpangkat::destroy($id);

        return back();
    }

    public function petikanFungsional($nip)
    {
        return;
    }

    public function petikanFungsionalStruktural($nip)
    {
        return;
    }

    public function petikanPerorangan($nip)
    {
        return;
    }

    public function petikanStruktural($nip)
    {
        return;
    }

    public function petikanStrukturalPerorangan($nip)
    {
        return;
    }

    public function petikanSKPerorangan($nip)
    {
        return;
    }

    public function createDataPenataran(Request $request)
    {
        Riwayatpenataran::create([
            'nip' => $request->nip,
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
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'kodeusulan' => $request->kodeusulan,
            'ijazahsertifikat' => $request->ijazahsertifikat,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return back();
    }

    public function editDataPenataran($id)
    {
        return Riwayatpenataran::find($id);
    }

    public function updateDataPenataran(Request $request, $id)
    {
        $data = Riwayatpenataran::find($id);
        $data->update([
            'nip' => $request->nip,
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
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'ijazahsertifikat' => $request->ijazahsertifikat,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);

        return back();
    }

    public function deleteDataPenataran($id)
    {
        Riwayatpenataran::destroy($id);

        return back();
    }

    public function createDataPendidikan(Request $request)
    {
        riwayatpendidikan::create([
            'nip' => $request->nip,
            'tingkatpendidikan' => $request->tingkatpendidikan,
            'jurusan' => $request->jurusan,
            'noijazah' => $request->noijazah,
            'tanggalijazah' => $request->tanggalijazah,
            'namasekolah' => $request->namasekolah,
            'alamatsekolah' => $request->alamatsekolah,
            'tahunmasuk' => $request->tahunmasuk,
            'tahunlulus' => $request->tahunlulus,
            'ijazahsertifikat' => $request->ijazahsertifikat,
        ]);
        return back();
    }

    public function editDataPendidikan($id)
    {
        return riwayatpendidikan::find($id);
    }

    public function updateDataPendidikan(Request $request, $id)
    {
        $data = riwayatpendidikan::find($id);
        $data->update([
            'nip' => $request->nip,
            'tingkatpendidikan' => $request->tingkatpendidikan,
            'jurusan' => $request->jurusan,
            'noijazah' => $request->noijazah,
            'tanggalijazah' => $request->tanggalijazah,
            'namasekolah' => $request->namasekolah,
            'alamatsekolah' => $request->alamatsekolah,
            'tahunmasuk' => $request->tahunmasuk,
            'tahunlulus' => $request->tahunlulus,
            'ijazahsertifikat' => $request->ijazahsertifikat,
        ]);

        return back();
    }

    public function deleteDataPendidikan($id)
    {
        riwayatpendidikan::destroy($id);

        return back();
    }

    public function createDataPenugasan(Request $request)
    {
        riwayatpenugasan::create([
            'nip' => $request->nip,
            'jenispenugasan' => $request->jenispenugasan,
            'namapenugasan' => $request->namapenugasan,
            'tempatpenugasan' => $request->tempatpenugasan,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajampenugasan' => $request->lamajampenugasan,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return back();
    }

    public function editDataPenugasan($id)
    {
        return riwayatpenugasan::find($id);
    }

    public function updateDataPenugasan(Request $request, $id)
    {
        $data = riwayatpenugasan::find($id);
        $data->update([
            'nip' => $request->nip,
            'jenispenugasan' => $request->jenispenugasan,
            'namapenugasan' => $request->namapenugasan,
            'tempatpenugasan' => $request->tempatpenugasan,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajampenugasan' => $request->lamajampenugasan,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);

        return back();
    }

    public function deleteDataPenugasan($id)
    {
        riwayatpenugasan::destroy($id);

        return back();
    }

    public function createDataPenghargaan(Request $request)
    {
        riwayatpenghargaan::create([
            'nip' => $request->nip,
            'namapenghargaan' => $request->namapenghargaan,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'tahun' => $request->tahun,
            'asal' => $request->asal,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return back();
    }

    public function editDataPenghargaan($id)
    {
        return riwayatpenghargaan::find($id);
    }

    public function updateDataPenghargaan(Request $request, $id)
    {
        $data = riwayatpenghargaan::find($id);
        $data->update([
            'nip' => $request->nip,
            'namapenghargaan' => $request->namapenghargaan,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'tahun' => $request->tahun,
            'asal' => $request->asal,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);

        return back();
    }

    public function deleteDataPenghargaan($id)
    {
        riwayatpenghargaan::destroy($id);

        return back();
    }

    public function createDataSeminar(Request $request)
    {
        riwayatseminar::create([
            'nip' => $request->nip,
            'jenisseminar' => $request->jenisseminar,
            'namaseminar' => $request->namaseminar,
            'tempatseminar' => $request->tempatseminar,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajamseminar' => $request->lamajamseminar,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'ijazahsertifikat' => $request->ijazahsertifikat,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);
        return back();
    }

    public function editDataSeminar($id)
    {
        return riwayatseminar::find($id);
    }

    public function updateDataSeminar(Request $request, $id)
    {
        $data = riwayatseminar::find($id);
        $data->update([
            'nip' => $request->nip,
            'jenisseminar' => $request->jenisseminar,
            'namaseminar' => $request->namaseminar,
            'tempatseminar' => $request->tempatseminar,
            'penyelenggara' => $request->penyelenggara,
            'angkatan' => $request->angkatan,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'lamajamseminar' => $request->lamajamseminar,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nosertifikat' => $request->nosertifikat,
            'tglsertifikat' => $request->tglsertifikat,
            'pangkatsaatitu' => $request->pangkatsaatitu,
            'golongansaatitu' => $request->golongansaatitu,
            'jabatansaatitu' => $request->jabatansaatitu,
            'eselonsaatitu' => $request->eselonsaatitu,
            'instansisaatitu' => $request->instansisaatitu,
            'ijazahsertifikat' => $request->ijazahsertifikat,
            'unitkerjasaatitu' => $request->unitkerjasaatitu,
        ]);

        return back();
    }

    public function deleteDataSeminar($id)
    {
        riwayatseminar::destroy($id);

        return back();
    }
}