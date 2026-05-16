<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'United States', 'code' => 'USA', 'flag' => ''],
            ['name' => 'Canada', 'code' => 'CAN', 'flag' => ''],
            ['name' => 'United Kingdom', 'code' => 'GBR', 'flag' => ''],
        ]);
    }
}
