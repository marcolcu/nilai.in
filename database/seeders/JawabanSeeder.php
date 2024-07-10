<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jawabans')->insert([
            'IDProgressUjian'    => '1',
            'jawaban'         => 'edison',
            'IDSoal'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('jawabans')->insert([
            'IDProgressUjian'    => '1',
            'jawaban'         => 'Yang Maha Kuasa',
            'IDSoal'         => '2',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('jawabans')->insert([
            'IDProgressUjian'    => '1',
            'jawaban'         => 'gak tau',
            'IDSoal'         => '3',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('jawabans')->insert([
            'IDProgressUjian'    => '2',
            'jawaban'         => 'edison',
            'IDSoal'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('jawabans')->insert([
            'IDProgressUjian'    => '2',
            'jawaban'         => 'Yang Maha Kuasa',
            'IDSoal'         => '2',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('jawabans')->insert([
            'IDProgressUjian'    => '2',
            'jawaban'         => 'gak tau',
            'IDSoal'         => '3',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
