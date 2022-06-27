<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatadiriSeeder extends Seeder
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
            'nama' => 'Putri',
            'alamat' => 'Bojonegoro',
        ]);
    }
}
