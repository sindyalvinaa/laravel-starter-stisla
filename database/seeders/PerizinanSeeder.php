<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PerizinanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('perizinans')->insert([
            'nama' => 'dd',
            'lembaga' => 'abc',
            'lama' => 'ss',
            'biaya' => "100",
            'persyaratan' => "asc"
        ]);
    }
}
