<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //kursus id 1
        DB::table('materis')->insert([
            'judul'    => 'Tambah tambahan',
            'deskripsi'         => 'Jadi gini caranya tambah tambahan',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('materis')->insert([
            'judul'    => 'Kali Kalian',
            'deskripsi'         => 'Jadi gini caranya Kali kalian',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('materis')->insert([
            'judul'    => 'Kurang kurangan',
            'deskripsi'         => 'Jadi gini caranya kurang kurangan',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 1,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);

        
        //kursus id 2
        DB::table('materis')->insert([
            'judul'    => 'Ukuran',
            'deskripsi'         => 'Jadi gini caranya nentuin ukuran dan bacanya',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 2,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('materis')->insert([
            'judul'    => 'Tekanan',
            'deskripsi'         => 'Jadi gini caranya ngitung tekanan',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 2,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('materis')->insert([
            'judul'    => 'Gravitasi',
            'deskripsi'         => 'Jadi di dunia ini ada yang namanya gravitasi',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 2,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);

        
        
        //kursus id 3
        DB::table('materis')->insert([
            'judul'    => 'HTML',
            'deskripsi'         => 'Gini caranya buat website pake html',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 3,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('materis')->insert([
            'judul'    => 'PHP',
            'deskripsi'         => 'Gini buat website pakai php',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 3,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('materis')->insert([
            'judul'    => 'Laravel',
            'deskripsi'         => 'Gini buat website pakai framework laravel',
            'konten'         => 'Link Video',
            'tipe'         => 'Video',
            'IDMataPelajaran'         => 3,
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
