<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProgressUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('progressujians')->insert([
            'IDUjian'    => '1',
            'nilai'         => '80',
            'Notes'         => '',
            'IDUser'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('progressujians')->insert([
            'IDUjian'    => '2',
            'nilai'         => '90',
            'Notes'         => '',
            'IDUser'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('progressujians')->insert([
            'IDUjian'    => '3',
            'nilai'         => '100',
            'Notes'         => '',
            'IDUser'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('progressujians')->insert([
            'IDUjian'    => '1',
            'nilai'         => '50',
            'Notes'         => '',
            'IDUser'         => '2',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('progressujians')->insert([
            'IDUjian'    => '2',
            'nilai'         => '40',
            'Notes'         => '',
            'IDUser'         => '2',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('progressujians')->insert([
            'IDUjian'    => '3',
            'nilai'         => '10',
            'Notes'         => '',
            'IDUser'         => '2',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
