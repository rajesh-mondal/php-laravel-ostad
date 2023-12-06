<?php

namespace Database\Seeders;

use App\Models\Profile;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        for ( $i = 0; $i < 10; $i++ ) {
            $faker = Faker::create();
            $profile = new Profile();
            $profile->id = $i + 1;
            $profile->first_name = $faker->firstName;
            $profile->last_name = $faker->lastName;
            $profile->phone_number = $faker->phoneNumber;
            $profile->age = $faker->numberBetween( 18, 60 );
            $profile->birthdate = $faker->date();
            $profile->location = $faker->countryCode;
            $profile->save();
        }
    }
}
