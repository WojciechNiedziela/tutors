<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;


class TutorsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tutors")->truncate();
        $faker = Factory::create();
        $data=[];
        for($i=0; $i<50; $i++){
            $data[] = ["name"=>$faker->firstName, "lastName"=>$faker->lastName, "email" => $faker->email, "phoneNumber" => $faker->numerify('###-###-###'),
            "subject" => $faker->name, "grade" => $faker->numberBetween(0, 6), "education" => $faker->text, "experience" => $faker->text];
        }
        DB::table("tutors")->insert($data);
    }
}
