<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ujians')->insert([
            'pertanyaan'    => 'Siapa penemu lampu?',
            'benar'         => 'edison',
            'salah1'         => 'albert',
            'salah2'         => 'bethoven',
            'salah3'         => 'meh',
            'salah4'         => 'the rock',
            'kursus_id'         => 2,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ujians')->insert([
            'pertanyaan'    => 'Siapa penemu ikan?',
            'benar'         => 'Yang Maha Kuasa',
            'kursus_id'         => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ujians')->insert([
            'pertanyaan'    => 'Gimana cara buat web',
            'benar'         => 'yah dibuat aja',
            'kursus_id'         => 3,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
