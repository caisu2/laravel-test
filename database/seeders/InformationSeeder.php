<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('information')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'age' => 3,
            'gender' => "Male",
            'address' => Str::random(10),
        ]);
    }
}
