<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\jurusan;

class jurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        jurusan::create([
            'kode' => "TI-MTI",
            'namajur' => "Teknik Informatika - Manajemen Teknik Informatika",
            'ketuajur' => "Wayan Gede Suka Parwita, M. Cs.",
        ]);
    }
}
