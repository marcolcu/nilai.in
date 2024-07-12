<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class KelasDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kelasdetails')->insert([
            'IDMataPelajaran'          => '1',
            'IDKelas'         => '1',
        ]);
        DB::table('kelasdetails')->insert([
            'IDMataPelajaran'          => '1',
            'IDKelas'         => '2',
        ]);
        DB::table('kelasdetails')->insert([
            'IDMataPelajaran'          => '2',
            'IDKelas'         => '1',
        ]);
        DB::table('kelasdetails')->insert([
            'IDMataPelajaran'          => '2',
            'IDKelas'         => '2',
        ]);
        DB::table('kelasdetails')->insert([
            'IDMataPelajaran'          => '3',
            'IDKelas'         => '1',
        ]);
    }
}
