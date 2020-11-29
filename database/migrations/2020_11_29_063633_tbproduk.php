<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbproduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //bagian restore data 
        schema::create('produks',function (Blueprint $tb){
            $tb->increments('id');
            $tb->string('namaproduk',100);
            $tb->integer('id_kat');
            $tb->integer('qty');
            $tb->float('harga_beli');
            $tb->float('harga_jual');
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
        schema::dropIfExists('produks');
    }
}