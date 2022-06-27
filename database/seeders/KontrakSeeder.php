<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KontrakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kontraks')->insert([
            'nama' => 'dd',
            'jenis' => 'abc',
            'tanggal' => '11',
            'isi' => "ss",
            'biaya' => "100"
        ]);
    }
}
