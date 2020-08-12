<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->string('nama', 35)->nullable();
            $table->enum('jk', ['l', 'p'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('provinsi', 35)->nullable();
            $table->string('kota', 35)->nullable();
            $table->string('nope', 15)->nullable();
            $table->char('nik', 16)->nullable();
            $table->char('npwp', 20)->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_kyc')->nullable();
            $table->string('bank', 25)->nullable();
            $table->string('nama_rek', 25)->nullable();
            $table->string('no_rek', 25)->nullable();

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
        Schema::dropIfExists('farmers');
    }
}
