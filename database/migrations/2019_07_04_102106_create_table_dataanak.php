<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDataanak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataanak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('namaanak')->nullable();
            $table->string('tempatlahiranak')->nullable();
            $table->date('tgllahiranak')->nullable();
            $table->string('jeniskelaminanak')->nullable();
            $table->string('statuskeluargaanak')->nullable();
            $table->string('statustunjangananak')->nullable();
            $table->string('pendidikanumumanak')->nullable();
            $table->string('pekerjaananak')->nullable();
            $table->string('kodeusulan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataanak');
    }
}
