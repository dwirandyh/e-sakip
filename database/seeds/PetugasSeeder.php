<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas_satker')->insert([
            'id_satuan_kerja' => 1,
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
