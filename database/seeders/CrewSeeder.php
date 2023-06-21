<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crew;
use Faker\Factory as FakerFactory;

class CrewSeeder extends Seeder
{
    public function run()
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 100; $i++) {
            Crew::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->firstNameMale,
                'email' => $faker->email,
                'address' => $faker->address,
                'education' => $faker->randomElement(['High School', 'Bachelor', 'Master', 'PhD']),
                'contactDetails' => $faker->phoneNumber,
            ]);
        }
    }
}
