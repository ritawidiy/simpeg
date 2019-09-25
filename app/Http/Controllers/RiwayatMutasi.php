<?php

namespace App\Http\Controllers;

use App\Model\BerkasMutasi;
use App\Model\Biodata;
use App\Model\Masteruser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

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
        $last_id = \App\Model\Riwayatmutasi::max('id');
        \App\Model\Riwayatmutasi::create([
            'id' => $last_id + 1,
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

    public function showBerkasMutasi($id)
    {
        $data = \App\Model\Riwayatmutasi::find(decrypt($id));
        $berkas = $data->getBerkasMutasi;
        $level = Auth::user()->level;

        return view('berkas-mutasi', compact('data', 'berkas', 'level'));
    }

    public function unggahBerkasMutasi(Request $request)
    {
        $data = \App\Model\Riwayatmutasi::find($request->riwayatmutasi_id);
        $check = $data->getBerkasMutasi;
        if (!$check) {
            $last_id = BerkasMutasi::max('id');
            BerkasMutasi::create([
                'id' => $last_id + 1,
                'riwayatmutasi_id' => $data->id,
                'foto_berwarna' => $request->foto_berwarna != "" ? $request->foto_berwarna->getClientOriginalName() : null,
                'status_foto_berwarna' => $request->foto_berwarna != "" ? 1 : 0,
                'suratpersetujuan_instansi' => $request->suratpersetujuan_instansi != "" ? $request->suratpersetujuan_instansi->getClientOriginalName() : null,
                'status_suratpersetujuan_instansi' => $request->suratpersetujuan_instansi != "" ? 1 : 0,
                'suratpermohonan_mutasi' => $request->suratpermohonan_mutasi != "" ? $request->suratpermohonan_mutasi->getClientOriginalName() : null,
                'status_suratpermohonan_mutasi' => $request->suratpermohonan_mutasi != "" ? 1 : 0,
                'fcl_skcpns' => $request->fcl_skcpns != "" ? $request->fcl_skcpns->getClientOriginalName() : null,
                'status_fcl_skcpns' => $request->fcl_skcpns != "" ? 1 : 0,
                'fcl_skpns' => $request->fcl_skpns != "" ? $request->fcl_skpns->getClientOriginalName() : null,
                'status_fcl_skpns' => $request->fcl_skpns != "" ? 1 : 0,
                'fcl_skpangkatakhir' => $request->fcl_skpangkatakhir != "" ? $request->fcl_skpangkatakhir->getClientOriginalName() : null,
                'status_fcl_skpangkatakhir' => $request->fcl_skpangkatakhir != "" ? 1 : 0,
                'skb_indisipliner' => $request->skb_indisipliner != "" ? $request->skb_indisipliner->getClientOriginalName() : null,
                'status_skb_indisipliner' => $request->skb_indisipliner != "" ? 1 : 0,
                'skb_tugasbelajar' => $request->skb_tugasbelajar != "" ? $request->skb_tugasbelajar->getClientOriginalName() : null,
                'status_skb_tugasbelajar' => $request->skb_tugasbelajar != "" ? 1 : 0,
                'skb_tanggunganhutang' => $request->skb_tanggunganhutang != "" ? $request->skb_tanggunganhutang->getClientOriginalName() : null,
                'status_skb_tanggunganhutang' => $request->skb_tanggunganhutang != "" ? 1 : 0,
                'fcl_dp3_skp' => $request->fcl_dp3_skp != "" ? $request->fcl_dp3_skp->getClientOriginalName() : null,
                'status_fcl_dp3_skp' => $request->fcl_dp3_skp != "" ? 1 : 0,
                'fcl_ijazah_transkripnilai' => $request->fcl_ijazah_transkripnilai != "" ? $request->fcl_ijazah_transkripnilai->getClientOriginalName() : null,
                'status_fcl_ijazah_transkripnilai' => $request->fcl_ijazah_transkripnilai != "" ? 1 : 0,
                'daftar_riwayathidup' => $request->daftar_riwayathidup != "" ? $request->daftar_riwayathidup->getClientOriginalName() : null,
                'status_daftar_riwayathidup' => $request->daftar_riwayathidup != "" ? 1 : 0,
                'fcl_ktp' => $request->fcl_ktp != "" ? $request->fcl_ktp->getClientOriginalName() : null,
                'status_fcl_ktp' => $request->fcl_ktp != "" ? 1 : 0,
                'fcl_kartupegawai' => $request->fcl_kartupegawai != "" ? $request->fcl_kartupegawai->getClientOriginalName() : null,
                'status_fcl_kartupegawai' => $request->fcl_kartupegawai != "" ? 1 : 0,
                'fcl_suratnikah' => $request->fcl_suratnikah != "" ? $request->fcl_suratnikah->getClientOriginalName() : null,
                'status_fcl_suratnikah' => $request->fcl_suratnikah != "" ? 1 : 0,
                'sp_satuistri_istripertama' => $request->sp_satuistri_istripertama != "" ? $request->sp_satuistri_istripertama->getClientOriginalName() : null,
                'status_sp_satuistri_istripertama' => $request->sp_satuistri_istripertama != "" ? 1 : 0,
                'sp_bersediaditempatkan' => $request->sp_bersediaditempatkan != "" ? $request->sp_bersediaditempatkan->getClientOriginalName() : null,
                'status_sp_bersediaditempatkan' => $request->sp_bersediaditempatkan != "" ? 1 : 0,
                'sk_sehatjasmani' => $request->sk_sehatjasmani != "" ? $request->sk_sehatjasmani->getClientOriginalName() : null,
                'status_sk_sehatjasmani' => $request->sk_sehatjasmani != "" ? 1 : 0,
                'tupoksi' => $request->tupoksi != "" ? $request->tupoksi->getClientOriginalName() : null,
                'status_tupoksi' => $request->tupoksi != "" ? 1 : 0,
                'sertifikat_keahlian' => $request->sertifikat_keahlian != "" ? $request->sertifikat_keahlian->getClientOriginalName() : null,
                'status_sertifikat_keahlian' => $request->sertifikat_keahlian != "" ? 1 : 0
            ]);
        } else {
            if ($request->foto_berwarna != $check->foto_berwarna) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->foto_berwarna);
            }
            if ($request->suratpersetujuan_instansi != $check->suratpersetujuan_instansi) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->suratpersetujuan_instansi);
            }
            if ($request->suratpermohonan_mutasi != $check->suratpermohonan_mutasi) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->suratpermohonan_mutasi);
            }
            if ($request->fcl_skcpns != $check->fcl_skcpns) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_skcpns);
            }
            if ($request->fcl_skpns != $check->fcl_skpns) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_skpns);
            }
            if ($request->fcl_skpangkatakhir != $check->fcl_skpangkatakhir) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_skpangkatakhir);
            }
            if ($request->skb_indisipliner != $check->skb_indisipliner) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->skb_indisipliner);
            }
            if ($request->skb_tugasbelajar != $check->skb_tugasbelajar) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->skb_tugasbelajar);
            }
            if ($request->skb_tanggunganhutang != $check->skb_tanggunganhutang) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->skb_tanggunganhutang);
            }
            if ($request->fcl_dp3_skp != $check->fcl_dp3_skp) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_dp3_skp);
            }
            if ($request->fcl_ijazah_transkripnilai != $check->fcl_ijazah_transkripnilai) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_ijazah_transkripnilai);
            }
            if ($request->daftar_riwayathidup != $check->daftar_riwayathidup) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->daftar_riwayathidup);
            }
            if ($request->fcl_ktp != $check->fcl_ktp) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_ktp);
            }
            if ($request->fcl_kartupegawai != $check->fcl_kartupegawai) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_kartupegawai);
            }
            if ($request->fcl_suratnikah != $check->fcl_suratnikah) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->fcl_suratnikah);
            }
            if ($request->sp_satuistri_istripertama != $check->sp_satuistri_istripertama) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->sp_satuistri_istripertama);
            }
            if ($request->sp_bersediaditempatkan != $check->sp_bersediaditempatkan) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->sp_bersediaditempatkan);
            }
            if ($request->sk_sehatjasmani != $check->sk_sehatjasmani) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->sk_sehatjasmani);
            }
            if ($request->tupoksi != $check->tupoksi) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->tupoksi);
            }
            if ($request->sertifikat_keahlian != $check->sertifikat_keahlian) {
                Storage::delete('public/berkas-mutasi/' . $data->nip . '/' . $check->sertifikat_keahlian);
            }

            $check->update([
                'riwayatmutasi_id' => $data->id,
                'foto_berwarna' => $request->foto_berwarna != "" ? $request->foto_berwarna->getClientOriginalName() : $check->foto_berwarna,
                'status_foto_berwarna' => $request->foto_berwarna != "" ? 1 : $check->status_foto_berwarna,
                'suratpersetujuan_instansi' => $request->suratpersetujuan_instansi != "" ? $request->suratpersetujuan_instansi->getClientOriginalName() : $check->suratpersetujuan_instansi,
                'status_suratpersetujuan_instansi' => $request->suratpersetujuan_instansi != "" ? 1 : $check->status_suratpersetujuan_instansi,
                'suratpermohonan_mutasi' => $request->suratpermohonan_mutasi != "" ? $request->suratpermohonan_mutasi->getClientOriginalName() : $check->suratpermohonan_mutasi,
                'status_suratpermohonan_mutasi' => $request->suratpermohonan_mutasi != "" ? 1 : $check->status_suratpermohonan_mutasi,
                'fcl_skcpns' => $request->fcl_skcpns != "" ? $request->fcl_skcpns->getClientOriginalName() : $check->fcl_skcpns,
                'status_fcl_skcpns' => $request->fcl_skcpns != "" ? 1 : $check->status_fcl_skcpns,
                'fcl_skpns' => $request->fcl_skpns != "" ? $request->fcl_skpns->getClientOriginalName() : $check->fcl_skpns,
                'status_fcl_skpns' => $request->fcl_skpns != "" ? 1 : $check->status_fcl_skpns,
                'fcl_skpangkatakhir' => $request->fcl_skpangkatakhir != "" ? $request->fcl_skpangkatakhir->getClientOriginalName() : $check->fcl_skpangkatakhir,
                'status_fcl_skpangkatakhir' => $request->fcl_skpangkatakhir != "" ? 1 : $check->status_fcl_skpangkatakhir,
                'skb_indisipliner' => $request->skb_indisipliner != "" ? $request->skb_indisipliner->getClientOriginalName() : $check->skb_indisipliner,
                'status_skb_indisipliner' => $request->skb_indisipliner != "" ? 1 : $check->status_skb_indisipliner,
                'skb_tugasbelajar' => $request->skb_tugasbelajar != "" ? $request->skb_tugasbelajar->getClientOriginalName() : $check->skb_tugasbelajar,
                'status_skb_tugasbelajar' => $request->skb_tugasbelajar != "" ? 1 : $check->status_skb_tugasbelajar,
                'skb_tanggunganhutang' => $request->skb_tanggunganhutang != "" ? $request->skb_tanggunganhutang->getClientOriginalName() : $check->skb_tanggunganhutang,
                'status_skb_tanggunganhutang' => $request->skb_tanggunganhutang != "" ? 1 : $check->status_skb_tanggunganhutang,
                'fcl_dp3_skp' => $request->fcl_dp3_skp != "" ? $request->fcl_dp3_skp->getClientOriginalName() : $check->fcl_dp3_skp,
                'status_fcl_dp3_skp' => $request->fcl_dp3_skp != "" ? 1 : $check->status_fcl_dp3_skp,
                'fcl_ijazah_transkripnilai' => $request->fcl_ijazah_transkripnilai != "" ? $request->fcl_ijazah_transkripnilai->getClientOriginalName() : $check->fcl_ijazah_transkripnilai,
                'status_fcl_ijazah_transkripnilai' => $request->fcl_ijazah_transkripnilai != "" ? 1 : $check->status_fcl_ijazah_transkripnilai,
                'daftar_riwayathidup' => $request->daftar_riwayathidup != "" ? $request->daftar_riwayathidup->getClientOriginalName() : $check->daftar_riwayathidup,
                'status_daftar_riwayathidup' => $request->daftar_riwayathidup != "" ? 1 : $check->status_daftar_riwayathidup,
                'fcl_ktp' => $request->fcl_ktp != "" ? $request->fcl_ktp->getClientOriginalName() : $check->fcl_ktp,
                'status_fcl_ktp' => $request->fcl_ktp != "" ? 1 : $check->status_fcl_ktp,
                'fcl_kartupegawai' => $request->fcl_kartupegawai != "" ? $request->fcl_kartupegawai->getClientOriginalName() : $check->fcl_kartupegawai,
                'status_fcl_kartupegawai' => $request->fcl_kartupegawai != "" ? 1 : $check->status_fcl_kartupegawai,
                'fcl_suratnikah' => $request->fcl_suratnikah != "" ? $request->fcl_suratnikah->getClientOriginalName() : $check->fcl_suratnikah,
                'status_fcl_suratnikah' => $request->fcl_suratnikah != "" ? 1 : $check->status_fcl_suratnikah,
                'sp_satuistri_istripertama' => $request->sp_satuistri_istripertama != "" ? $request->sp_satuistri_istripertama->getClientOriginalName() : $check->sp_satuistri_istripertama,
                'status_sp_satuistri_istripertama' => $request->sp_satuistri_istripertama != "" ? 1 : $check->status_sp_satuistri_istripertama,
                'sp_bersediaditempatkan' => $request->sp_bersediaditempatkan != "" ? $request->sp_bersediaditempatkan->getClientOriginalName() : $check->sp_bersediaditempatkan,
                'status_sp_bersediaditempatkan' => $request->sp_bersediaditempatkan != "" ? 1 : $check->status_sp_bersediaditempatkan,
                'sk_sehatjasmani' => $request->sk_sehatjasmani != "" ? $request->sk_sehatjasmani->getClientOriginalName() : $check->sk_sehatjasmani,
                'status_sk_sehatjasmani' => $request->sk_sehatjasmani != "" ? 1 : $check->status_sk_sehatjasmani,
                'tupoksi' => $request->tupoksi != "" ? $request->tupoksi->getClientOriginalName() : $check->tupoksi,
                'status_tupoksi' => $request->tupoksi != "" ? 1 : $check->status_tupoksi,
                'sertifikat_keahlian' => $request->sertifikat_keahlian != "" ? $request->sertifikat_keahlian->getClientOriginalName() : $check->sertifikat_keahlian,
                'status_sertifikat_keahlian' => $request->sertifikat_keahlian != "" ? 1 : $check->status_sertifikat_keahlian
            ]);
        }

        if ($request->hasFile('foto_berwarna')) {
            $request->foto_berwarna->storeAs('public/berkas-mutasi/' . $data->nip, $request->foto_berwarna->getClientOriginalName());
        }
        if ($request->hasFile('suratpersetujuan_instansi')) {
            $request->suratpersetujuan_instansi->storeAs('public/berkas-mutasi/' . $data->nip, $request->suratpersetujuan_instansi->getClientOriginalName());
        }
        if ($request->hasFile('suratpermohonan_mutasi')) {
            $request->suratpermohonan_mutasi->storeAs('public/berkas-mutasi/' . $data->nip, $request->suratpermohonan_mutasi->getClientOriginalName());
        }
        if ($request->hasFile('fcl_skcpns')) {
            $request->fcl_skcpns->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_skcpns->getClientOriginalName());
        }
        if ($request->hasFile('fcl_skpns')) {
            $request->fcl_skpns->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_skpns->getClientOriginalName());
        }
        if ($request->hasFile('fcl_skpangkatakhir')) {
            $request->fcl_skpangkatakhir->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_skpangkatakhir->getClientOriginalName());
        }
        if ($request->hasFile('skb_indisipliner')) {
            $request->skb_indisipliner->storeAs('public/berkas-mutasi/' . $data->nip, $request->skb_indisipliner->getClientOriginalName());
        }
        if ($request->hasFile('skb_tugasbelajar')) {
            $request->skb_tugasbelajar->storeAs('public/berkas-mutasi/' . $data->nip, $request->skb_tugasbelajar->getClientOriginalName());
        }
        if ($request->hasFile('skb_tanggunganhutang')) {
            $request->skb_tanggunganhutang->storeAs('public/berkas-mutasi/' . $data->nip, $request->skb_tanggunganhutang->getClientOriginalName());
        }
        if ($request->hasFile('fcl_dp3_skp')) {
            $request->fcl_dp3_skp->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_dp3_skp->getClientOriginalName());
        }
        if ($request->hasFile('fcl_ijazah_transkripnilai')) {
            $request->fcl_ijazah_transkripnilai->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_ijazah_transkripnilai->getClientOriginalName());
        }
        if ($request->hasFile('daftar_riwayathidup')) {
            $request->daftar_riwayathidup->storeAs('public/berkas-mutasi/' . $data->nip, $request->daftar_riwayathidup->getClientOriginalName());
        }
        if ($request->hasFile('fcl_ktp')) {
            $request->fcl_ktp->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_ktp->getClientOriginalName());
        }
        if ($request->hasFile('fcl_kartupegawai')) {
            $request->fcl_kartupegawai->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_kartupegawai->getClientOriginalName());
        }
        if ($request->hasFile('fcl_suratnikah')) {
            $request->fcl_suratnikah->storeAs('public/berkas-mutasi/' . $data->nip, $request->fcl_suratnikah->getClientOriginalName());
        }
        if ($request->hasFile('sp_satuistri_istripertama')) {
            $request->sp_satuistri_istripertama->storeAs('public/berkas-mutasi/' . $data->nip, $request->sp_satuistri_istripertama->getClientOriginalName());
        }
        if ($request->hasFile('sp_bersediaditempatkan')) {
            $request->sp_bersediaditempatkan->storeAs('public/berkas-mutasi/' . $data->nip, $request->sp_bersediaditempatkan->getClientOriginalName());
        }
        if ($request->hasFile('sk_sehatjasmani')) {
            $request->sk_sehatjasmani->storeAs('public/berkas-mutasi/' . $data->nip, $request->sk_sehatjasmani->getClientOriginalName());
        }
        if ($request->hasFile('tupoksi')) {
            $request->tupoksi->storeAs('public/berkas-mutasi/' . $data->nip, $request->tupoksi->getClientOriginalName());
        }
        if ($request->hasFile('sertifikat_keahlian')) {
            $request->sertifikat_keahlian->storeAs('public/berkas-mutasi/' . $data->nip, $request->sertifikat_keahlian->getClientOriginalName());
        }

        return back()->with('success', 'Berkas mutasi [' . $data->nip . '] berhasil diperbarui!');
    }

    public function verifyBerkasMutasi(Request $request)
    {
        $data = BerkasMutasi::where('riwayatmutasi_id', $request->riwayatmutasi_id)->first();
        $data->update([
            'status_foto_berwarna' => $request->status_foto_berwarna != "" ? $request->status_foto_berwarna : $data->status_foto_berwarna,
            'status_suratpersetujuan_instansi' => $request->status_suratpersetujuan_instansi != "" ? $request->status_suratpersetujuan_instansi : $data->status_suratpersetujuan_instansi,
            'status_suratpermohonan_mutasi' => $request->status_suratpermohonan_mutasi != "" ? $request->status_suratpermohonan_mutasi : $data->status_suratpermohonan_mutasi,
            'status_fcl_skcpns' => $request->status_fcl_skcpns != "" ? $request->status_fcl_skcpns : $data->status_fcl_skcpns,
            'status_fcl_skpns' => $request->status_fcl_skpns != "" ? $request->status_fcl_skpns : $data->status_fcl_skpns,
            'status_fcl_skpangkatakhir' => $request->status_fcl_skpangkatakhir != "" ? $request->status_fcl_skpangkatakhir : $data->status_fcl_skpangkatakhir,
            'status_skb_indisipliner' => $request->status_skb_indisipliner != "" ? $request->status_skb_indisipliner : $data->status_skb_indisipliner,
            'status_skb_tugasbelajar' => $request->status_skb_tugasbelajar != "" ? $request->status_skb_tugasbelajar : $data->status_skb_tugasbelajar,
            'status_skb_tanggunganhutang' => $request->status_skb_tanggunganhutang != "" ? $request->status_skb_tanggunganhutang : $data->status_skb_tanggunganhutang,
            'status_fcl_dp3_skp' => $request->status_fcl_dp3_skp != "" ? $request->status_fcl_dp3_skp : $data->status_fcl_dp3_skp,
            'status_fcl_ijazah_transkripnilai' => $request->status_fcl_ijazah_transkripnilai != "" ? $request->status_fcl_ijazah_transkripnilai : $data->status_fcl_ijazah_transkripnilai,
            'status_daftar_riwayathidup' => $request->status_daftar_riwayathidup != "" ? $request->status_daftar_riwayathidup : $data->status_daftar_riwayathidup,
            'status_fcl_ktp' => $request->status_fcl_ktp != "" ? $request->status_fcl_ktp : $data->status_fcl_ktp,
            'status_fcl_kartupegawai' => $request->status_fcl_kartupegawai != "" ? $request->status_fcl_kartupegawai : $data->status_fcl_kartupegawai,
            'status_fcl_suratnikah' => $request->status_fcl_suratnikah != "" ? $request->status_fcl_suratnikah : $data->status_fcl_suratnikah,
            'status_sp_satuistri_istripertama' => $request->status_sp_satuistri_istripertama != "" ? $request->status_sp_satuistri_istripertama : $data->status_sp_satuistri_istripertama,
            'status_sp_bersediaditempatkan' => $request->status_sp_bersediaditempatkan != "" ? $request->status_sp_bersediaditempatkan : $data->status_sp_bersediaditempatkan,
            'status_sk_sehatjasmani' => $request->status_sk_sehatjasmani != "" ? $request->status_sk_sehatjasmani : $data->status_sk_sehatjasmani,
            'status_tupoksi' => $request->status_tupoksi != "" ? $request->status_tupoksi : $data->status_tupoksi,
            'status_sertifikat_keahlian' => $request->status_sertifikat_keahlian != "" ? $request->status_sertifikat_keahlian : $data->status_sertifikat_keahlian
        ]);

        return back()->with('success', 'Berkas mutasi [' . $data->getRiwayatMutasi->nip . '] berhasil diverifikasi!');
    }

    public function unduhBerkasMutasi($nip, $berkas)
    {
        $file_path = storage_path('app/public/berkas-mutasi/' . $nip . '/' . $berkas);
        if (file_exists($file_path)) {
            return Response::download($file_path, $berkas, [
                'Content-Length: ' . filesize($file_path)
            ]);
        } else {
            return back()->with('warning', 'File yang Anda minta tidak tersedia!');
        }
    }
}
