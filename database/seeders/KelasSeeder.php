<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kelases')->insert([
            'tingkat'    => '12',
            'jurusan'         => 'ips',
            'wali'         => 'Cristopher',
            'ketua'         => 'Marco',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('kelases')->insert([
            'tingkat'    => '12',
            'jurusan'         => 'ipa',
            'wali'         => 'fabian',
            'ketua'         => 'cahya',
            'created_at'    =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
