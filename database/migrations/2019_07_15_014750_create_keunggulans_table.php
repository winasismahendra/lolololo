<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeunggulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keunggulans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('judul');
            $table->text('deskripsi');
            $table->text('subjudul');
            $table->text('isi');
            $table->text('icon');
            $table->text('id_admin');
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
        Schema::dropIfExists('keunggulans');
    }
}
