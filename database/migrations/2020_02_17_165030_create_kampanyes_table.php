<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampanyesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampanyes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul', 255);
            $table->string('organisasi', 255);
            $table->unsignedBigInteger('target');	            
            $table->text('deskripsi');
            $table->unsignedBigInteger('jumlah');	 
            $table->string('lokasi', 255);
            $table->date('tenggat');
            $table->integer('status');
            $table->unsignedBigInteger('id_user');	
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
        Schema::dropIfExists('kampanyes');
    }
}
