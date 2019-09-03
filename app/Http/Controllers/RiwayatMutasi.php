<?php

namespace App\Http\Controllers;

use App\Model\BerkasMutasi;
use App\Model\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatMutasi extends Controller
{
    public function showRiwayatMutasi()
    {
        $bio = Biodata::where('nip', Auth::user()->username)->first();
        $data = \App\Model\Riwayatmutasi::where('nip', Auth::user()->username)->get();

        return view('user.riwayat-mutasi', compact('bio', 'data'));
    }

    public function createRiwayatMutasi(Request $request)
    {
        \App\Model\Riwayatmutasi::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jeniskenaikan' => $request->jeniskenaikan,
            'alasanmutasi' => $request->alasanmutasi,
            'pertimbangan' => $request->pertimbangan,
            'nipatasan' => $request->nipatasan,
            'minit' => $request->minit,
            'tglditetapkan' => $request->tglditetapkan,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nobkn' => $request->nobkn,
            'tglbkn' => $request->tglbkn,
            'jabatanlama' => $request->jabatanlama,
            'jabatanbaru' => $request->jabatanbaru,
            'tmtlama' => $request->tmtlama,
            'tmtbaru' => $request->tmtbaru,
            'gajilama' => $request->gajilama,
            'gajibaru' => $request->gajibaru,
            'masakerjatahunlama' => $request->masakerjatahunlama,
            'masakerjabulanlama' => $request->masakerjabulanlama,
            'masakerjatahunbaru' => $request->masakerjatahunbaru,
            'masakerjabulanbaru' => $request->masakerjabulanbaru,
            'pangkatgolonganlama' => $request->pangkatgolonganlama,
            'pangkatgolonganbaru' => $request->pangkatgolonganbaru,
            'eselonlama' => $request->eselonlama,
            'eselonbaru' => $request->eselonbaru,
            'unitkerjalama' => $request->unitkerjalama,
            'unitkerjabaru' => $request->unitkerjabaru,
            'tglpengajuan' => now()->format('Y-m-d')
        ]);

        return back()->with('success', 'Data mutasi [' . $request->nip . '] berhasil dibuat!');
    }

    public function updateRiwayatMutasi(Request $request)
    {
        $data = \App\Model\Riwayatmutasi::find($request->id);
        $data->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jeniskenaikan' => $request->jeniskenaikan,
            'alasanmutasi' => $request->alasanmutasi,
            'pertimbangan' => $request->pertimbangan,
            'nipatasan' => $request->nipatasan,
            'minit' => $request->minit,
            'tglditetapkan' => $request->tglditetapkan,
            'nosk' => $request->nosk,
            'tglsk' => $request->tglsk,
            'nobkn' => $request->nobkn,
            'tglbkn' => $request->tglbkn,
            'jabatanlama' => $request->jabatanlama,
            'jabatanbaru' => $request->jabatanbaru,
            'tmtlama' => $request->tmtlama,
            'tmtbaru' => $request->tmtbaru,
            'gajilama' => $request->gajilama,
            'gajibaru' => $request->gajibaru,
            'masakerjatahunlama' => $request->masakerjatahunlama,
            'masakerjabulanlama' => $request->masakerjabulanlama,
            'masakerjatahunbaru' => $request->masakerjatahunbaru,
            'masakerjabulanbaru' => $request->masakerjabulanbaru,
            'pangkatgolonganlama' => $request->pangkatgolonganlama,
            'pangkatgolonganbaru' => $request->pangkatgolonganbaru,
            'eselonlama' => $request->eselonlama,
            'eselonbaru' => $request->eselonbaru,
            'unitkerjalama' => $request->unitkerjalama,
            'unitkerjabaru' => $request->unitkerjabaru,
        ]);

        return back()->with('success', 'Data mutasi [' . $data->nip . '] berhasil diperbarui!');
    }

    public function deleteRiwayatMutasi($id)
    {
        $data = \App\Model\Riwayatmutasi::find(decrypt($id));
        $data->delete();

        return back()->with('success', 'Data mutasi [' . $data->nip . '] berhasil dihapus!');
    }

    public function unggahBerkasMutasi(Request $request)
    {
        $data = \App\Model\Riwayatmutasi::find($request->id);
        BerkasMutasi::create([
            'riwayatmutasi_id' => $data->id,
            'foto_berwarna' => $request->foto_berwarna,
            'suratpersetujuan_instansi' => $request->suratpersetujuan_instansi,
            'suratpermohonan_mutasi' => $request->suratpermohonan_mutasi,
            'fcl_skcpns' => $request->fcl_skcpns,
            'fcl_skpns' => $request->fcl_skpns,
            'fcl_skpangkatakhir' => $request->fcl_skpangkatakhir,
            'skb_indisipliner' => $request->skb_indisipliner,
            'skb_tugasbelajar' => $request->skb_tugasbelajar,
            'skb_tanggunganhutang' => $request->skb_tanggunganhutang,
            'fcl_dp3_skp' => $request->fcl_dp3_skp,
            'ijazah_transkripnilai' => $request->ijazah_transkripnilai,
            'fcl_ktp' => $request->fcl_ktp,
            'fcl_kartupegawai' => $request->fcl_kartupegawai,
            'fcl_suratnikah' => $request->fcl_suratnikah,
            'sp_satuistri_istripertama' => $request->sp_satuistri_istripertama,
            'sp_bersediaditempatkan' => $request->sp_bersediaditempatkan,
            'sk_sehatjasmani' => $request->sk_sehatjasmani,
            'tupoksi' => $request->tupoksi,
            'sertifikat_keahlian' => $request->sertifikat_keahlian
        ]);

        return back()->with('success', 'Berkas mutasi [' . $data->nip . '] berhasil diperbarui!');
    }
}
