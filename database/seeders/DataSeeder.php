<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data')->insert([
            'kecamatan' => Str::random(10),
            'kabupaten' => Str::random(10),
            'provinsi' => Str::random(10),
            'status' => Str::random(10),
        ]);
    }
}
