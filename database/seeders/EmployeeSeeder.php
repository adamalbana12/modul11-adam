<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Somad',
                'lastname' => 'Stecu',
                'email'=> 'somadstecu@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Adam',
                'lastname' => 'Albana',
                'email'=> 'adamalbana@gmail.com',
                'age' => 25,
                'position_id' => 2
            ],
            [
                'firstname' => 'Alex',
                'lastname' => 'darderdor',
                'email'=> 'alexdarderdor@gmail.com',
                'age' => 23,
                'position_id' => 3
            ],
        ]);
    }
}
