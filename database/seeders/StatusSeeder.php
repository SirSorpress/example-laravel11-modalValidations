<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ['name' => 'finished'],
            ['name' => 'pending'],
            ['name' => 'blocked'],
            ['name' => 'discarded'],
       ];

       DB::table('statuses')->insert($status);
    }
}
