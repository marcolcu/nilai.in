<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'nama'          => 'Fabian',
            'email'         => 'fabianhie@gmail.com',
            'password'      => bcrypt('admin1'),
            'peran'         => 'admin',
            'IDKelas'         => '2',
        ]);
        DB::table('users')->insert([
            'nama'          => 'Marco',
            'email'         => 'vincentiusmarco@gmail.com',
            'password'      => bcrypt('admin1'),
            'peran'         => 'user',
            'IDKelas'       => '1',
        ]);
    }
}
