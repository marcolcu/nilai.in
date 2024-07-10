<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('matapelajarans')->insert([
            'nama'    => 'Matematika',
            'deskripsi'         => 'Di sini dilatih ujian itung itungan',
            'IDKelas'         => '2',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('matapelajarans')->insert([
            'nama'    => 'Fisika',
            'deskripsi'         => 'Di sini dilatih mental karena tidak semua orang suka fisika',
            'IDKelas'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('matapelajarans')->insert([
            'nama'    => 'Komputer',
            'deskripsi'         => 'Di sini isinya cuman main main',
            'IDKelas'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
