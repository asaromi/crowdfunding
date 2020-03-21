<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pertanyaans')->insert([
            'pertanyaan' => 'Apakah pertanyaan #1',
            'id_user' => '1',
        ]);
    }
}
