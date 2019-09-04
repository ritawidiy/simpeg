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
        $level = Auth::user()->level;
        $bio = Biodata::where('nip', Auth::user()->username)->first();

        if ($level == 7) {
            $data = \App\Model\Riwayatmutasi::where('nip', Auth::user()->username)->get();
        } else {
            $data = \App\Model\Riwayatmutasi::orderByDesc('id')->get();
        }

        return view('riwayat-mutasi', compact('level', 'bio', 'data'));
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

    public function verifyRiwayatMutasi(Request $request)
    {
        $data = \App\Model\Riwayatmutasi::find($request->id);
        $data->update([
            'status' => $request->status,
            'userpengusul' => $request->userpengusul,
        ]);

        return back()->with('success', 'Data mutasi [' . $data->nip . '] berhasil ' . $data->status . '!');
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
            'fcl_ijazah_transkripnilai' => $request->fcl_ijazah_transkripnilai,
            'daftar_riwayathidup' => $request->daftar_riwayathidup,
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

    public function verifyBerkasMutasi(Request $request)
    {
        $data = BerkasMutasi::where('riwayatmutasi_id', $request->id)->first();
        $data->update([
            'status_foto_berwarna' => $request->status_foto_berwarna,
            'status_suratpersetujuan_instansi' => $request->status_suratpersetujuan_instansi,
            'status_suratpermohonan_mutasi' => $request->status_suratpermohonan_mutasi,
            'status_fcl_skcpns' => $request->status_fcl_skcpns,
            'status_fcl_skpns' => $request->status_fcl_skpns,
            'status_fcl_skpangkatakhir' => $request->status_fcl_skpangkatakhir,
            'status_skb_indisipliner' => $request->status_skb_indisipliner,
            'status_skb_tugasbelajar' => $request->status_skb_tugasbelajar,
            'status_skb_tanggunganhutang' => $request->status_skb_tanggunganhutang,
            'status_fcl_dp3_skp' => $request->status_fcl_dp3_skp,
            'status_fcl_ijazah_transkripnilai' => $request->status_fcl_ijazah_transkripnilai,
            'status_daftar_riwayathidup' => $request->status_daftar_riwayathidup,
            'status_fcl_ktp' => $request->status_fcl_ktp,
            'status_fcl_kartupegawai' => $request->status_fcl_kartupegawai,
            'status_fcl_suratnikah' => $request->status_fcl_suratnikah,
            'status_sp_satuistri_istripertama' => $request->status_sp_satuistri_istripertama,
            'status_sp_bersediaditempatkan' => $request->status_sp_bersediaditempatkan,
            'status_sk_sehatjasmani' => $request->status_sk_sehatjasmani,
            'status_tupoksi' => $request->status_tupoksi,
            'status_sertifikat_keahlian' => $request->status_sertifikat_keahlian,
            'status_berkas' => $request->status_berkas
        ]);

        return back()->with('success', 'Berkas mutasi [' . $data->getRiwayatMutasi->nip . '] berhasil diverifikasi!');
    }
}
