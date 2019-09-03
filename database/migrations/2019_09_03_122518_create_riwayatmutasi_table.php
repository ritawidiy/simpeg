<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatmutasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayatmutasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 100);
            $table->string('nama');
            $table->string('jeniskenaikan', 100);
            $table->text('alasanmutasi');
            $table->text('pertimbangan');
            $table->string('nipatasan', 100);
            $table->string('minit', 10);
            $table->date('tglditetapkan');
            $table->string('nosk', 30);
            $table->date('tglsk');
            $table->string('nobkn', 100);
            $table->date('tglbkn');
            $table->string('pangkatgolonganlama', 100);
            $table->string('pangkatgolonganbaru', 100);
            $table->string('jabatanlama', 100);
            $table->string('jabatanbaru', 100);
            $table->string('eselonlama', 100);
            $table->string('eselonbaru', 100);
            $table->date('tmtlama');
            $table->date('tmtbaru');
            $table->string('gajilama', 20);
            $table->string('gajibaru', 20);
            $table->integer('masakerjatahunlama');
            $table->integer('masakerjatahunbaru');
            $table->integer('masakerjabulanlama');
            $table->integer('masakerjabulanbaru');
            $table->string('unitkerjalama', 100);
            $table->string('unitkerjabaru', 100);
            $table->date('tglpengajuan');
            $table->string('status', 30)->nullable();
            $table->string('userpengusul', 30)->nullable();
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
        Schema::dropIfExists('riwayatmutasi');
    }
}
