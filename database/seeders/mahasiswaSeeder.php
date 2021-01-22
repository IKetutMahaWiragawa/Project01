<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\mahasiswa;

class mahasiswaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        mahasiswa::create([
            'nim' => '19101440',
            'nama' => "I Ketut Maha Wiragawa",
            'jk' => "Laki - Laki",
            'kode' => "TI-MTI",
            'indeks' => 'A',
        ]);
    }
}
