<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengacaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengacaras')->insert([
            'foto' => 'foto',
            'nama_pengacara' => 'Witan',
            'kategori' => '2',
            'profil' => 'kehfisdifja;ifue',
        ]);
    }
}
