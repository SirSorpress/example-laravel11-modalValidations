<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todoList = [
            [
                "title" => "Example 1",
                "description" => "Description example 1",
                "type_id" => 1,
                "status_id" => 1,
                "date" => Carbon::now()->format('Y-m-d'),
            ],
            [
                "title" => "Example 2",
                "description" => "Description example 2",
                "type_id" => 2,
                "status_id" => 2,
                "date" => Carbon::now()->format('Y-m-d'),
            ],
        ];

        DB::table('todos')->insert($todoList);
    }
}
