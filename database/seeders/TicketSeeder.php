<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tickets")->insert([
            [

                'date' => "2022-03-05",
                'price' => 3.99,
                'train_id' => 3,
                'ticket_type_id => 1'
            ],

            [
                'date' => "2020-06-10",
                'price' => 9.99,
                'train_id' => 2,
                'ticket_type_id => 2'
            ],

            [
                'date' => "2019-10-09",
                'price' => 15.00,
                'train_id' => 1,
                'ticket_type_id => 3'
            ],
        ]);
    }
}
