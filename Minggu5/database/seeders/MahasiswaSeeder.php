<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'name' => 'Muhammad Nuzul Ridoi',
            'jenis_kelamin' => 1,
            'prodi' => 1,
            'nohp' => '081918137013',
            'alamat' => 'Jl Mutiara V, Kec Sampang, Madura'
        ]);
    }
}
