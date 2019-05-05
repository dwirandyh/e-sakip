<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasSatkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas_satker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_satuan_kerja');
            $table->string('name', 50);
            $table->enum('jabatan', ['inputer', 'kepala']);
            $table->string('email', 100);
            $table->string('password');
            $table->timestamps();

            $table->foreign('id_satuan_kerja')
                ->references('id')->on('satuan_kerja')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas_satker');
    }
}
