<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kursuses')->insert([
            'nama'    => 'Matematika',
            'deskripsi'         => 'Di sini dilatih ujian itung itungan',
            'jadwalmulai'         => '2024-07-29',
            'jadwalselesai'         => '2024-08-29',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('kursuses')->insert([
            'nama'    => 'Fisika',
            'deskripsi'         => 'Di sini dilatih mental karena tidak semua orang suka fisika',
            'jadwalmulai'         => '2024-07-29',
            'jadwalselesai'         => '2024-08-29',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('kursuses')->insert([
            'nama'    => 'Komputer',
            'deskripsi'         => 'Di sini isinya cuman main main',
            'jadwalmulai'         => '2024-07-29',
            'jadwalselesai'         => '2024-08-29',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
