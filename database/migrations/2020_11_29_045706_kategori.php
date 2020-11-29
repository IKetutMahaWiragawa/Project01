<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ////bagian restore data
        schema::create('kategori',function(Blueprint $tb){
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
        schemma::dropIfExits ('kategori');
    }
}

