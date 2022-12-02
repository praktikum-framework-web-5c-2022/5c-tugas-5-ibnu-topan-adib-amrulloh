<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajihs', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('karyawan_id')->unique()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('gajih_pokok');
            $table->integer('gajih_lembur');
            $table->integer('tunjangan');
            $table->integer('potongan');
            $table->integer('total_gajih');
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
        Schema::dropIfExists('gajihs');
    }
};
