<?php

namespace Database\Seeders;

use App\Models\Student;
use Faker\Factory;
use Illuminate\Database\Seeder;
class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker=Factory::create();
        foreach (range(1,20) as $value){
            Student::insert([
                "student_name" =>$faker->name(),
                "student_city" =>$faker->city(),
                "student_fees" =>$faker->randomFloat(2)
            ]);
        }
    }
}
