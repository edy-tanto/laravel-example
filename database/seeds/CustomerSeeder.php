<?php

use Illuminate\Database\Seeder;

use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i <= 40; $i++) 
        {
            Customer::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail
            ]);
        }
    }
}
