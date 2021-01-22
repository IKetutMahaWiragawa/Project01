<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //data jurusan
        schema::create('jurusan', function (Blueprint $tb) {
            $tb->string('kode', 8);
            $tb->string('namajur', 50);
            $tb->string('ketuajur', 50);
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
        //drop data jurusan
        schema::dropIfExits('jurusan');
    }
}
