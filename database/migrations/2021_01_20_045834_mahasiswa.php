<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //data mahasiswa 
        schema::create('mahasiswa', function (Blueprint $tb) {
            $tb->integer('nim', 8);
            $tb->string('nama', 50);
            $tb->string('jk', 20);
            $tb->string('kode', 30);
            $tb->string('indeks', 5);
            $tb->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop data mahasiswa
        schema::dropIfExits('mahasiswa');
    }
}
