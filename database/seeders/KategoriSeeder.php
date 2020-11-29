<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        kategori::create(
            ['Kategori'=>"Keyboard",'Keterangan'=>"Segala macam keyboard PC, Laptop, TV"]);
        kategori::create(
            ['Kategori'=>"Mouse",'Keterangan'=>"Segala Macam Mouse Wire maupun Wireless"]);
        kategori::create(
            ['Kategori'=>"Flashdisk",'Keterangan'=>"Segala Macam Merek, ukuran Flashdisk"]);
    }
}
