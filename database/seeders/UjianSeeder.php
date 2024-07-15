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
            'nama'    => 'UAS Matematika',
            'deskripsi'         => 'Ini ujian akhir mate',
            'kkm'         => '60',
            'IDMataPelajaran'         => '1',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ujians')->insert([
            'nama'    => 'UAS Fisika',
            'deskripsi'         => 'Ini ujian akhir fisika',
            'kkm'         => '65',
            'IDMataPelajaran'         => '2',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('ujians')->insert([
            'nama'    => 'UTS Komputer',
            'deskripsi'         => 'Ini ujian akhir komputer',
            'kkm'         => '60',
            'IDMataPelajaran'         => '3',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
