<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bukus')->insert([
            'nama' => 'dd',
            'penulis' => 'abc',
            'tahun' => 'ss',
            'stok' => "100",
            'harga' => "asc"
        ]);
    }
}
