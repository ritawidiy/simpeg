<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBerkasPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 100);
            $table->text('sertifikatdiklat')->nullable();
            $table->integer('status_sertifikatdiklat')->default(0);
            $table->text('sertifikatkursus')->nullable();
            $table->integer('status_sertifikatkursus')->default(0);
            $table->text('sertifikatpenataran')->nullable();
            $table->integer('status_sertifikatpenataran')->default(0);
            $table->text('scanijazah')->nullable();
            $table->integer('status_scanijazah')->default(0);
            $table->text('sertifikatseminar')->nullable();
            $table->integer('status_sertifikatseminar')->default(0);
            $table->text('ktp')->nullable();
            $table->integer('status_ktp')->default(0);
            $table->text('sim')->nullable();
            $table->integer('status_sim')->default(0);
            $table->text('transkripnilai')->nullable();
            $table->integer('status_transkripnilai')->default(0);
            $table->text('suratlamaran')->nullable();
            $table->integer('status_suratlamaran')->default(0);
            $table->text('fotopegangktp_akunscn')->nullable();
            $table->integer('status_fotopegangktp_akunscn')->default(0);
            $table->text('aktelahir')->nullable();
            $table->integer('status_aktelahir')->default(0);
            $table->text('bukti_akreditasiprodi')->nullable();
            $table->integer('status_bukti_akreditasiprodi')->default(0);
            $table->text('bukti_akreditasiuniv')->nullable();
            $table->integer('status_bukti_akreditasiuniv')->default(0);
            $table->text('kartukeluarga')->nullable();
            $table->integer('status_kartukeluarga')->default(0);
            $table->text('pasfoto_merah')->nullable();
            $table->integer('status_pasfoto_merah')->default(0);
            $table->text('fotokopiijazah_sd')->nullable();
            $table->integer('status_fotokopiijazah_sd')->default(0);
            $table->text('fotokopiijazah_smp')->nullable();
            $table->integer('status_fotokopiijazah_smp')->default(0);
            $table->text('fotokopiijazah_sma_smk')->nullable();
            $table->integer('status_fotokopiijazah_sma_smk')->default(0);
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
        Schema::dropIfExists('berkas_pegawai');
    }
}
