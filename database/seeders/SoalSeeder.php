<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('soals')->insert([
            'tipe'          => 'Ganda',
            'pertanyaan'    => 'Siapa penemu lampu?',
            'kunci'         => 'edison',
            'pilihan1'         => 'edison',
            'pilihan2'         => 'albert',
            'pilihan3'         => 'bethoven',
            'pilihan4'         => 'meh',
            'pilihan5'         => 'the rock',
            'IDUjian'         => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('soals')->insert([
            'tipe'          => 'Esai',
            'pertanyaan'    => 'Siapa penemu ikan?',
            'kunci'         => 'Yang Maha Kuasa',
            'IDUjian'         => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('soals')->insert([
            'tipe'          => 'Esai',
            'pertanyaan'    => 'Gimana cara buat web',
            'kunci'         => 'yah dibuat aja',
            'IDUjian'         => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
