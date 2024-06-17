<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opd_id')->references('id')->on('opds');
            $table->foreignId('uptd_id')->nullable()->references('id')->on('uptds');
            $table->string('domain')->unique();
            $table->enum('lokasi_server', ['Diskominfo','Diluar']);
            $table->enum('jenis_layanan', ['Layanan Publik', 'Layanan Tata Kelola Pemerintahan']);
            $table->enum('jenis_aset', ['Aplikasi','Website']);
            $table->enum('tahun', ['2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030']);
            $table->enum('sumber_dana', ['APBD','Non-APBD']);
            $table->double('nilai');
            $table->text('deskripsi');
            $table->string('kak');
            $table->string('probis');
            $table->string('manual_book');
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
        Schema::dropIfExists('sites');
    }
}