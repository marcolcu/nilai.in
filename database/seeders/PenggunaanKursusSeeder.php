<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PenggunaanKursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('penggunaan_kursuses')->insert([
            'progres'    => 50,
            'nilai'    => 60,
            'user_id'    => 1,
            'kursus_id'    => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('penggunaan_kursuses')->insert([
            'progres'    => 40,
            'nilai'    => 20,
            'user_id'    => 2,
            'kursus_id'    => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('penggunaan_kursuses')->insert([
            'progres'    => 50,
            'nilai'    => 60,
            'user_id'    => 1,
            'kursus_id'    => 2,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('penggunaan_kursuses')->insert([
            'progres'    => 40,
            'nilai'    => 20,
            'user_id'    => 2,
            'kursus_id'    => 2,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('penggunaan_kursuses')->insert([
            'progres'    => 50,
            'nilai'    => 60,
            'user_id'    => 1,
            'kursus_id'    => 3,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('penggunaan_kursuses')->insert([
            'progres'    => 40,
            'nilai'    => 20,
            'user_id'    => 2,
            'kursus_id'    => 3,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
