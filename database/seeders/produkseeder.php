<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\produks;


class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //    
        produks::create(
            ['namaproduk'=>"Keyboard N740",
            'id_kat'=>'1',
            'qty'=>'50',
            'harga_jual'=>'145000',
            'harga_beli'=>'120000',]);
        produks::create(
            ['namaproduk'=>"Mouse Wire LogIN",
            'id_kat'=>'2',
            'qty'=>'240',
            'harga_jual'=>'75000',
            'harga_beli'=>'50000',]);
        produks::create(
            ['namaproduk'=>"Mouse Wire Zeep",
            'id_kat'=>'2',
            'qty'=>'210',
            'harga_jual'=>'70000',
            'harga_beli'=>'45000',]);
        produks::create(
            ['namaproduk'=>"Mouse Wireless Zeep",
            'id_kat'=>'2',
            'qty'=>'110',
            'harga_jual'=>'85000',
            'harga_beli'=>'65000',]);
        produks::create(
            ['namaproduk'=>"Mouse Wireless Versi 2",
            'id_kat'=>'2',
            'qty'=>'110',
            'harga_jual'=>'95000',
            'harga_beli'=>'70000',]);
        produks::create(
            ['namaproduk'=>"Flasdisk 4Gb KengStong",
            'id_kat'=>'3',
            'qty'=>'210',
            'harga_jual'=>'60000',
            'harga_beli'=>'45000',]);
        produks::create(
            ['namaproduk'=>"Flasdisk 8Gb KengStong",
            'id_kat'=>'3',
            'qty'=>'210',
            'harga_jual'=>'85000',
            'harga_beli'=>'60000',]);
        }
}
