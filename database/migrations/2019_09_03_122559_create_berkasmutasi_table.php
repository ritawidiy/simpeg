<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerkasmutasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkasmutasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('riwayatmutasi_id')->unsigned();
            $table->foreign('riwayatmutasi_id')->references('id')->on('riwayatmutasi')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->text('foto_berwarna')->nullable();
            $table->boolean('status_foto_berwarna')->default(false);
            $table->text('suratpersetujuan_instansi')->nullable();
            $table->boolean('status_suratpersetujuan_instansi')->default(false);
            $table->text('suratpermohonan_mutasi')->nullable();
            $table->boolean('status_suratpermohonan_mutasi')->default(false);
            $table->text('fcl_skcpns')->nullable();
            $table->boolean('status_fcl_skcpns')->default(false);
            $table->text('fcl_skpns')->nullable();
            $table->boolean('status_fcl_skpns')->default(false);
            $table->text('fcl_skpangkatakhir')->nullable();
            $table->boolean('status_fcl_skpangkatakhir')->default(false);
            $table->text('skb_indisipliner')->nullable();
            $table->boolean('status_skb_indisipliner')->default(false);
            $table->text('skb_tugasbelajar')->nullable();
            $table->boolean('status_skb_tugasbelajar')->default(false);
            $table->text('skb_tanggunganhutang')->nullable();
            $table->boolean('status_skb_tanggunganhutang')->default(false);
            $table->text('fcl_dp3_skp')->nullable();
            $table->boolean('status_fcl_dp3_skp')->default(false);
            $table->text('fcl_ijazah_transkripnilai')->nullable();
            $table->boolean('status_fcl_ijazah_transkripnilai')->default(false);
            $table->text('daftar_riwayathidup')->nullable();
            $table->boolean('status_daftar_riwayathidup')->default(false);
            $table->text('fcl_ktp')->nullable();
            $table->boolean('status_fcl_ktp')->default(false);
            $table->text('fcl_kartupegawai')->nullable();
            $table->boolean('status_fcl_kartupegawai')->default(false);
            $table->text('fcl_suratnikah')->nullable();
            $table->boolean('status_fcl_suratnikah')->default(false);
            $table->text('sp_satuistri_istripertama')->nullable();
            $table->boolean('status_sp_satuistri_istripertama')->default(false);
            $table->text('sp_bersediaditempatkan')->nullable();
            $table->boolean('status_sp_bersediaditempatkan')->default(false);
            $table->text('sk_sehatjasmani')->nullable();
            $table->boolean('status_sk_sehatjasmani')->default(false);
            $table->text('tupoksi')->nullable();
            $table->boolean('status_tupoksi')->default(false);
            $table->text('sertifikat_keahlian')->nullable();
            $table->boolean('status_sertifikat_keahlian')->default(false);
            $table->boolean('status_berkas')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkasmutasi');
    }
}
