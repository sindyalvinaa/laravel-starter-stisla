<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('datadiris')->insert([
            'foto' => 'foto',
            'bidang_praktik' => 'abc',
            'biaya' => '100.000',
            'masalah' => "asc"
        ]);
    }
}
