<?php

use Illuminate\Database\Seeder;

use App\Models\WorkType;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $workTypes = WorkType::get()->keyBy('id')->toArray();

        for($i = 0; $i <= 500; $i++)
        {
            $customerId = rand(1, 40);
            $value = rand(2000000, 100000000);
            $workTypeId = array_rand($workTypes, 2)[0];
            $workType = $workTypes[$workTypeId];

            Project::create([
                'customer_id'  => $customerId,
                'work_type_id' => $workType['id'],
                'name'         => "$faker->company (" . $workType['name'] . ")",
                'value'        => $value,
                'deadline'     => $faker->dateTimeInInterval('now', '+ 10 months')
            ]);
        }
    }
}
