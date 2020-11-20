<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelkategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ////bagian restore data
        schema::create('produks',function(Blueprint $tb){
            $tb->increments('Id');
            $tb->string('Kategori',100);
            $tb->string('Keterangan',255);
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
        //bagian drop data
        schemma::dropIfExits ('produks');
    }
}