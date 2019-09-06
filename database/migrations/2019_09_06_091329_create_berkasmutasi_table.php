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
            $table->integer('status_foto_berwarna')->default(0);
            $table->text('suratpersetujuan_instansi')->nullable();
            $table->integer('status_suratpersetujuan_instansi')->default(0);
            $table->text('suratpermohonan_mutasi')->nullable();
            $table->integer('status_suratpermohonan_mutasi')->default(0);
            $table->text('fcl_skcpns')->nullable();
            $table->integer('status_fcl_skcpns')->default(0);
            $table->text('fcl_skpns')->nullable();
            $table->integer('status_fcl_skpns')->default(0);
            $table->text('fcl_skpangkatakhir')->nullable();
            $table->integer('status_fcl_skpangkatakhir')->default(0);
            $table->text('skb_indisipliner')->nullable();
            $table->integer('status_skb_indisipliner')->default(0);
            $table->text('skb_tugasbelajar')->nullable();
            $table->integer('status_skb_tugasbelajar')->default(0);
            $table->text('skb_tanggunganhutang')->nullable();
            $table->integer('status_skb_tanggunganhutang')->default(0);
            $table->text('fcl_dp3_skp')->nullable();
            $table->integer('status_fcl_dp3_skp')->default(0);
            $table->text('fcl_ijazah_transkripnilai')->nullable();
            $table->integer('status_fcl_ijazah_transkripnilai')->default(0);
            $table->text('daftar_riwayathidup')->nullable();
            $table->integer('status_daftar_riwayathidup')->default(0);
            $table->text('fcl_ktp')->nullable();
            $table->integer('status_fcl_ktp')->default(0);
            $table->text('fcl_kartupegawai')->nullable();
            $table->integer('status_fcl_kartupegawai')->default(0);
            $table->text('fcl_suratnikah')->nullable();
            $table->integer('status_fcl_suratnikah')->default(0);
            $table->text('sp_satuistri_istripertama')->nullable();
            $table->integer('status_sp_satuistri_istripertama')->default(0);
            $table->text('sp_bersediaditempatkan')->nullable();
            $table->integer('status_sp_bersediaditempatkan')->default(0);
            $table->text('sk_sehatjasmani')->nullable();
            $table->integer('status_sk_sehatjasmani')->default(0);
            $table->text('tupoksi')->nullable();
            $table->integer('status_tupoksi')->default(0);
            $table->text('sertifikat_keahlian')->nullable();
            $table->integer('status_sertifikat_keahlian')->default(0);
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
