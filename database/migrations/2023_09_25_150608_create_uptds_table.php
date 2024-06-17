<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUptdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uptds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('opd_id')->references('id')->on('opds');
            $table->string('nama_uptd')->unique();
            $table->string('alias_uptd');
            $table->text('alamat');
            $table->string('email')->unique();
            $table->string('secondemail')->unique();
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
        Schema::dropIfExists('uptds');
    }
}
