<?php

namespace App\Http\Controllers;

use App\Model\BerkasPegawai;
use App\Model\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class BerkasPegawaiController extends Controller
{
    public function showBerkasPegawai($nip)
    {
        $data = Biodata::where('nip', $nip)->first();
        $level = Auth::user()->level;
        $berkas = $data->getBerkasPegawai;

        return view('berkas-pegawai', compact('data', 'berkas', 'level'));
    }

    public function unggahBerkasPegawai(Request $request)
    {
        $data = Biodata::where('nip', $request->nip)->first();
        $check = $data->getBerkasPegawai;
        if (!$check) {
            BerkasPegawai::create([
                'nip' => $data->nip,
                'sertifikatdiklat' => $request->sertifikatdiklat != "" ? $request->sertifikatdiklat->getClientOriginalName() : null,
                'status_sertifikatdiklat' => $request->sertifikatdiklat != "" ? 1 : 0,
                'sertifikatkursus' => $request->sertifikatkursus != "" ? $request->sertifikatkursus->getClientOriginalName() : null,
                'status_sertifikatkursus' => $request->sertifikatkursus != "" ? 1 : 0,
                'sertifikatpenataran' => $request->sertifikatpenataran != "" ? $request->sertifikatpenataran->getClientOriginalName() : null,
                'status_sertifikatpenataran' => $request->sertifikatpenataran != "" ? 1 : 0,
                'scanijazah' => $request->scanijazah != "" ? $request->scanijazah->getClientOriginalName() : null,
                'status_scanijazah' => $request->scanijazah != "" ? 1 : 0,
                'sertifikatseminar' => $request->sertifikatseminar != "" ? $request->sertifikatseminar->getClientOriginalName() : null,
                'status_sertifikatseminar' => $request->sertifikatseminar != "" ? 1 : 0,
                'ktp' => $request->ktp != "" ? $request->ktp->getClientOriginalName() : null,
                'status_ktp' => $request->ktp != "" ? 1 : 0,
                'sim' => $request->sim != "" ? $request->sim->getClientOriginalName() : null,
                'status_sim' => $request->sim != "" ? 1 : 0,
                'transkripnilai' => $request->transkripnilai != "" ? $request->transkripnilai->getClientOriginalName() : null,
                'status_transkripnilai' => $request->transkripnilai != "" ? 1 : 0,
                'suratlamaran' => $request->suratlamaran != "" ? $request->suratlamaran->getClientOriginalName() : null,
                'status_suratlamaran' => $request->suratlamaran != "" ? 1 : 0,
                'fotopegangktp_akunscn' => $request->fotopegangktp_akunscn != "" ? $request->fotopegangktp_akunscn->getClientOriginalName() : null,
                'status_fotopegangktp_akunscn' => $request->fotopegangktp_akunscn != "" ? 1 : 0,
                'aktelahir' => $request->aktelahir != "" ? $request->aktelahir->getClientOriginalName() : null,
                'status_aktelahir' => $request->aktelahir != "" ? 1 : 0,
                'bukti_akreditasiprodi' => $request->bukti_akreditasiprodi != "" ? $request->bukti_akreditasiprodi->getClientOriginalName() : null,
                'status_bukti_akreditasiprodi' => $request->bukti_akreditasiprodi != "" ? 1 : 0,
                'bukti_akreditasiuniv' => $request->bukti_akreditasiuniv != "" ? $request->bukti_akreditasiuniv->getClientOriginalName() : null,
                'status_bukti_akreditasiuniv' => $request->bukti_akreditasiuniv != "" ? 1 : 0,
                'kartukeluarga' => $request->kartukeluarga != "" ? $request->kartukeluarga->getClientOriginalName() : null,
                'status_kartukeluarga' => $request->kartukeluarga != "" ? 1 : 0,
                'pasfoto_merah' => $request->pasfoto_merah != "" ? $request->pasfoto_merah->getClientOriginalName() : null,
                'status_pasfoto_merah' => $request->pasfoto_merah != "" ? 1 : 0,
                'fotokopiijazah_sd' => $request->fotokopiijazah_sd != "" ? $request->fotokopiijazah_sd->getClientOriginalName() : null,
                'status_fotokopiijazah_sd' => $request->fotokopiijazah_sd != "" ? 1 : 0,
                'fotokopiijazah_smp' => $request->fotokopiijazah_smp != "" ? $request->fotokopiijazah_smp->getClientOriginalName() : null,
                'status_fotokopiijazah_smp' => $request->fotokopiijazah_smp != "" ? 1 : 0,
                'fotokopiijazah_sma_smk' => $request->fotokopiijazah_sma_smk != "" ? $request->fotokopiijazah_sma_smk->getClientOriginalName() : null,
                'status_fotokopiijazah_sma_smk' => $request->fotokopiijazah_sma_smk != "" ? 1 : 0,
            ]);

        } else {
            if ($request->sertifikatdiklat != $check->sertifikatdiklat) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->sertifikatdiklat);
            }
            if ($request->sertifikatkursus != $check->sertifikatkursus) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->sertifikatkursus);
            }
            if ($request->sertifikatpenataran != $check->sertifikatpenataran) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->sertifikatpenataran);
            }
            if ($request->scanijazah != $check->scanijazah) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->scanijazah);
            }
            if ($request->sertifikatseminar != $check->sertifikatseminar) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->sertifikatseminar);
            }
            if ($request->ktp != $check->ktp) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->ktp);
            }
            if ($request->sim != $check->sim) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->sim);
            }
            if ($request->transkripnilai != $check->transkripnilai) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->transkripnilai);
            }
            if ($request->suratlamaran != $check->suratlamaran) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->suratlamaran);
            }
            if ($request->fotopegangktp_akunscn != $check->fotopegangktp_akunscn) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->fotopegangktp_akunscn);
            }
            if ($request->aktelahir != $check->aktelahir) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->aktelahir);
            }
            if ($request->bukti_akreditasiprodi != $check->bukti_akreditasiprodi) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->bukti_akreditasiprodi);
            }
            if ($request->bukti_akreditasiuniv != $check->bukti_akreditasiuniv) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->bukti_akreditasiuniv);
            }
            if ($request->kartukeluarga != $check->kartukeluarga) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->kartukeluarga);
            }
            if ($request->pasfoto_merah != $check->pasfoto_merah) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->pasfoto_merah);
            }
            if ($request->fotokopiijazah_sd != $check->fotokopiijazah_sd) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->fotokopiijazah_sd);
            }
            if ($request->fotokopiijazah_smp != $check->fotokopiijazah_smp) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->fotokopiijazah_smp);
            }
            if ($request->fotokopiijazah_sma_smk != $check->fotokopiijazah_sma_smk) {
                Storage::delete('public/berkas-pegawai/' . $data->nip . '/' . $check->fotokopiijazah_sma_smk);
            }

            $check->update([
                'nip' => $data->nip,
                'sertifikatdiklat' => $request->sertifikatdiklat != "" ? $request->sertifikatdiklat->getClientOriginalName() : $check->sertifikatdiklat,
                'status_sertifikatdiklat' => $request->sertifikatdiklat != "" ? 1 : $check->status_sertifikatdiklat,
                'sertifikatkursus' => $request->sertifikatkursus != "" ? $request->sertifikatkursus->getClientOriginalName() : $check->sertifikatkursus,
                'status_sertifikatkursus' => $request->sertifikatkursus != "" ? 1 : $check->status_sertifikatkursus,
                'sertifikatpenataran' => $request->sertifikatpenataran != "" ? $request->sertifikatpenataran->getClientOriginalName() : $check->sertifikatpenataran,
                'status_sertifikatpenataran' => $request->sertifikatpenataran != "" ? 1 : $check->status_sertifikatpenataran,
                'scanijazah' => $request->scanijazah != "" ? $request->scanijazah->getClientOriginalName() : $check->scanijazah,
                'status_scanijazah' => $request->scanijazah != "" ? 1 : $check->status_scanijazah,
                'sertifikatseminar' => $request->sertifikatseminar != "" ? $request->sertifikatseminar->getClientOriginalName() : $check->sertifikatseminar,
                'status_sertifikatseminar' => $request->sertifikatseminar != "" ? 1 : $check->status_sertifikatseminar,
                'ktp' => $request->ktp != "" ? $request->ktp->getClientOriginalName() : $check->ktp,
                'status_ktp' => $request->ktp != "" ? 1 : $check->status_ktp,
                'sim' => $request->sim != "" ? $request->sim->getClientOriginalName() : $check->sim,
                'status_sim' => $request->sim != "" ? 1 : $check->status_sim,
                'transkripnilai' => $request->transkripnilai != "" ? $request->transkripnilai->getClientOriginalName() : $check->transkripnilai,
                'status_transkripnilai' => $request->transkripnilai != "" ? 1 : $check->status_transkripnilai,
                'suratlamaran' => $request->suratlamaran != "" ? $request->suratlamaran->getClientOriginalName() : $check->suratlamaran,
                'status_suratlamaran' => $request->suratlamaran != "" ? 1 : $check->status_suratlamaran,
                'fotopegangktp_akunscn' => $request->fotopegangktp_akunscn != "" ? $request->fotopegangktp_akunscn->getClientOriginalName() : $check->fotopegangktp_akunscn,
                'status_fotopegangktp_akunscn' => $request->fotopegangktp_akunscn != "" ? 1 : $check->status_fotopegangktp_akunscn,
                'aktelahir' => $request->aktelahir != "" ? $request->aktelahir->getClientOriginalName() : $check->aktelahir,
                'status_aktelahir' => $request->aktelahir != "" ? 1 : $check->status_aktelahir,
                'bukti_akreditasiprodi' => $request->bukti_akreditasiprodi != "" ? $request->bukti_akreditasiprodi->getClientOriginalName() : $check->bukti_akreditasiprodi,
                'status_bukti_akreditasiprodi' => $request->bukti_akreditasiprodi != "" ? 1 : $check->status_bukti_akreditasiprodi,
                'bukti_akreditasiuniv' => $request->bukti_akreditasiuniv != "" ? $request->bukti_akreditasiuniv->getClientOriginalName() : $check->bukti_akreditasiuniv,
                'status_bukti_akreditasiuniv' => $request->bukti_akreditasiuniv != "" ? 1 : $check->status_bukti_akreditasiuniv,
                'kartukeluarga' => $request->kartukeluarga != "" ? $request->kartukeluarga->getClientOriginalName() : $check->kartukeluarga,
                'status_kartukeluarga' => $request->kartukeluarga != "" ? 1 : $check->status_kartukeluarga,
                'pasfoto_merah' => $request->pasfoto_merah != "" ? $request->pasfoto_merah->getClientOriginalName() : $check->pasfoto_merah,
                'status_pasfoto_merah' => $request->pasfoto_merah != "" ? 1 : $check->status_pasfoto_merah,
                'fotokopiijazah_sd' => $request->fotokopiijazah_sd != "" ? $request->fotokopiijazah_sd->getClientOriginalName() : $check->fotokopiijazah_sd,
                'status_fotokopiijazah_sd' => $request->fotokopiijazah_sd != "" ? 1 : $check->status_fotokopiijazah_sd,
                'fotokopiijazah_smp' => $request->fotokopiijazah_smp != "" ? $request->fotokopiijazah_smp->getClientOriginalName() : $check->fotokopiijazah_smp,
                'status_fotokopiijazah_smp' => $request->fotokopiijazah_smp != "" ? 1 : $check->status_fotokopiijazah_smp,
                'fotokopiijazah_sma_smk' => $request->fotokopiijazah_sma_smk != "" ? $request->fotokopiijazah_sma_smk->getClientOriginalName() : $check->fotokopiijazah_sma_smk,
                'status_fotokopiijazah_sma_smk' => $request->fotokopiijazah_sma_smk != "" ? 1 : $check->status_fotokopiijazah_sma_smk,
            ]);
        }

        if ($request->hasFile('sertifikatdiklat')) {
            $request->sertifikatdiklat->storeAs('public/berkas-pegawai/' . $data->nip, $request->sertifikatdiklat->getClientOriginalName());
        }
        if ($request->hasFile('sertifikatkursus')) {
            $request->sertifikatkursus->storeAs('public/berkas-pegawai/' . $data->nip, $request->sertifikatkursus->getClientOriginalName());
        }
        if ($request->hasFile('sertifikatpenataran')) {
            $request->sertifikatpenataran->storeAs('public/berkas-pegawai/' . $data->nip, $request->sertifikatpenataran->getClientOriginalName());
        }
        if ($request->hasFile('scanijazah')) {
            $request->scanijazah->storeAs('public/berkas-pegawai/' . $data->nip, $request->scanijazah->getClientOriginalName());
        }
        if ($request->hasFile('sertifikatseminar')) {
            $request->sertifikatseminar->storeAs('public/berkas-pegawai/' . $data->nip, $request->sertifikatseminar->getClientOriginalName());
        }
        if ($request->hasFile('ktp')) {
            $request->ktp->storeAs('public/berkas-pegawai/' . $data->nip, $request->ktp->getClientOriginalName());
        }
        if ($request->hasFile('sim')) {
            $request->sim->storeAs('public/berkas-pegawai/' . $data->nip, $request->sim->getClientOriginalName());
        }
        if ($request->hasFile('transkripnilai')) {
            $request->transkripnilai->storeAs('public/berkas-pegawai/' . $data->nip, $request->transkripnilai->getClientOriginalName());
        }
        if ($request->hasFile('suratlamaran')) {
            $request->suratlamaran->storeAs('public/berkas-pegawai/' . $data->nip, $request->suratlamaran->getClientOriginalName());
        }
        if ($request->hasFile('fotopegangktp_akunscn')) {
            $request->fotopegangktp_akunscn->storeAs('public/berkas-pegawai/' . $data->nip, $request->fotopegangktp_akunscn->getClientOriginalName());
        }
        if ($request->hasFile('aktelahir')) {
            $request->aktelahir->storeAs('public/berkas-pegawai/' . $data->nip, $request->aktelahir->getClientOriginalName());
        }
        if ($request->hasFile('bukti_akreditasiprodi')) {
            $request->bukti_akreditasiprodi->storeAs('public/berkas-pegawai/' . $data->nip, $request->bukti_akreditasiprodi->getClientOriginalName());
        }
        if ($request->hasFile('bukti_akreditasiuniv')) {
            $request->bukti_akreditasiuniv->storeAs('public/berkas-pegawai/' . $data->nip, $request->bukti_akreditasiuniv->getClientOriginalName());
        }
        if ($request->hasFile('kartukeluarga')) {
            $request->kartukeluarga->storeAs('public/berkas-pegawai/' . $data->nip, $request->kartukeluarga->getClientOriginalName());
        }
        if ($request->hasFile('pasfoto_merah')) {
            $request->pasfoto_merah->storeAs('public/berkas-pegawai/' . $data->nip, $request->pasfoto_merah->getClientOriginalName());
        }
        if ($request->hasFile('fotokopiijazah_sd')) {
            $request->fotokopiijazah_sd->storeAs('public/berkas-pegawai/' . $data->nip, $request->fotokopiijazah_sd->getClientOriginalName());
        }
        if ($request->hasFile('fotokopiijazah_smp')) {
            $request->fotokopiijazah_smp->storeAs('public/berkas-pegawai/' . $data->nip, $request->fotokopiijazah_smp->getClientOriginalName());
        }
        if ($request->hasFile('fotokopiijazah_sma_smk')) {
            $request->fotokopiijazah_sma_smk->storeAs('public/berkas-pegawai/' . $data->nip, $request->fotokopiijazah_sma_smk->getClientOriginalName());
        }

        return back()->with('success', 'Berkas pegawai [' . $data->nip . '] berhasil diperbarui!');
    }

    public function verifyBerkasPegawai(Request $request)
    {
        $data = BerkasPegawai::where('nip', $request->nip)->first();
        $data->update([
            'status_sertifikatdiklat' => $request->status_sertifikatdiklat != "" ? $request->status_sertifikatdiklat : $data->status_sertifikatdiklat,
            'status_sertifikatkursus' => $request->status_sertifikatkursus != "" ? $request->status_sertifikatkursus : $data->status_sertifikatkursus,
            'status_sertifikatpenataran' => $request->status_sertifikatpenataran != "" ? $request->status_sertifikatpenataran : $data->status_sertifikatpenataran,
            'status_scanijazah' => $request->status_scanijazah != "" ? $request->status_scanijazah : $data->status_scanijazah,
            'status_sertifikatseminar' => $request->status_sertifikatseminar != "" ? $request->status_sertifikatseminar : $data->status_sertifikatseminar,
            'status_ktp' => $request->status_ktp != "" ? $request->status_ktp : $data->status_ktp,
            'status_sim' => $request->status_sim != "" ? $request->status_sim : $data->status_sim,
            'status_transkripnilai' => $request->status_transkripnilai != "" ? $request->status_transkripnilai : $data->status_transkripnilai,
            'status_suratlamaran' => $request->status_suratlamaran != "" ? $request->status_suratlamaran : $data->status_suratlamaran,
            'status_fotopegangktp_akunscn' => $request->status_fotopegangktp_akunscn != "" ? $request->status_fotopegangktp_akunscn : $data->status_fotopegangktp_akunscn,
            'status_aktelahir' => $request->status_aktelahir != "" ? $request->status_aktelahir : $data->status_aktelahir,
            'status_bukti_akreditasiprodi' => $request->status_bukti_akreditasiprodi != "" ? $request->status_bukti_akreditasiprodi : $data->status_bukti_akreditasiprodi,
            'status_bukti_akreditasiuniv' => $request->status_bukti_akreditasiuniv != "" ? $request->status_bukti_akreditasiuniv : $data->status_bukti_akreditasiuniv,
            'status_kartukeluarga' => $request->status_kartukeluarga != "" ? $request->status_kartukeluarga : $data->status_kartukeluarga,
            'status_pasfoto_merah' => $request->status_pasfoto_merah != "" ? $request->status_pasfoto_merah : $data->status_pasfoto_merah,
            'status_fotokopiijazah_sd' => $request->status_fotokopiijazah_sd != "" ? $request->status_fotokopiijazah_sd : $data->status_fotokopiijazah_sd,
            'status_fotokopiijazah_smp' => $request->status_fotokopiijazah_smp != "" ? $request->status_fotokopiijazah_smp : $data->status_fotokopiijazah_smp,
            'status_fotokopiijazah_sma_smk' => $request->status_fotokopiijazah_sma_smk != "" ? $request->status_fotokopiijazah_sma_smk : $data->status_fotokopiijazah_sma_smk,
        ]);

        return back()->with('success', 'Berkas pegawai [' . $data->nip . '] berhasil diverifikasi!');
    }

    public function unduhBerkasPegawai($nip, $berkas)
    {
        $file_path = storage_path('app/public/berkas-pegawai/' . $nip . '/' . $berkas);
        if (file_exists($file_path)) {
            return Response::download($file_path, $berkas, [
                'Content-Length: ' . filesize($file_path)
            ]);
        } else {
            return back()->with('warning', 'File yang Anda minta tidak tersedia!');
        }
    }
}