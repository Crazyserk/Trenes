<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("trains") -> insert([
            [
                'name' => "ARK1",
                'passengers' => 60,
                'year' => 2021,
                'train_type_id' => 3
            ],
            [
                'name' => "ARK2",
                'passengers' => 80,
                'year' => 2022,
                'train_type_id' => 2
            ],
            [
                'name' => "ARK3",
                'passengers' => 100,
                'year' => 2023,
                'train_type_id' => 1
            ],

        ])
    }
}
