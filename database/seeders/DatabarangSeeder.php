<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('databarangs')->insert([
            'namabarang' => 'mouse',
            'deskripsi' => 'rexus arka II',
            'kodebarang' => 'arka2',
            'jumlah' => '1',
            'tempatpenyimpanan' => 'lemari 3'

        ]);
    }
}
