<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i < 100; $i++) { 
            DB::table('students')->insert([
                'name_th' => $faker->name(),
                'name_eng' => $faker->name(),
                'nick_name' => $faker->firstName(),
                'birth_date' => $faker->date('Y-m-d'),
                'telephone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail(),
                'facebook' => $faker->name(),
                'line' => $faker->userName ,
                'affiliation' => $faker->company,
                'position' => $faker->jobTitle,
                'work_description' => $faker->text($maxNbChars = 300),
                'group_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
