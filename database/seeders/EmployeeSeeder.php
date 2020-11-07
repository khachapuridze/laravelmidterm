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
        DB::table('employees')->insert([
            'name' => "Giorgi",
            'surname' => "Khachapuridze",
            'position' => "here",
            'phone' => "false",
            'is_hired' => true,

        ]);

        DB::table('employees')->insert([
            'name' => "luka",
            'surname' => "Khachapuridze",
            'position' => "aqvs",
            'phone' => "124124124",
            'is_hired' => true,

        ]);
        DB::table('employees')->insert([
            'name' => "sadnro",
            'surname' => "Khachapuridze",
            'position' => "ar aqvs",
            'phone' => "12414212",
            'is_hired' => true,

        ]);
    }
}
