<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_profile')->insert([
            'address' => 'Nganjuk',
            'nomor_tlp' => '08xxxxxx',
            'ttl' => '2000-11-26',
            'foto' => 'picture.png'
        ]);
    }
}
