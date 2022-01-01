<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Employee::create([
           
        // ]);
        DB::table('employees')->insert([
			
                'name' => 'John Doe',
                'email' => 'doejohn@gmail.com',
                'phone' => '1234567890',
                'department' => 'hr',
                'dob' => '2010-01-03'
        ]);
    }
}
