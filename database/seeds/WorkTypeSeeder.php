<?php

use Illuminate\Database\Seeder;

use App\Models\WorkType;

class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkType::updateOrCreate([
            'code' => 'POS',
            'name' => 'Point of Sales Development'
        ]);

        WorkType::updateOrCreate([
            'code' => 'WEB_PROFILE',
            'name' => 'Web Profile Development'
        ]);

        WorkType::updateOrCreate([
            'code' => 'INVENTORY_SYSTEM',
            'name' => 'Inventory System Development'
        ]);

        WorkType::updateOrCreate([
            'code' => 'MOBILE_APPS',
            'name' => 'Mobile Apps Development'
        ]);

        WorkType::updateOrCreate([
            'code' => 'SOCIAL_MEDIA',
            'name' => 'Social Media Service'
        ]);
    }
}
