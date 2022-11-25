<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrgEvent;

class OrgEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrgEvent::insert([
            [
                'id' => 100,
                'event_name' => 'Face to Face Meeting'
            ],
            [
                'id' => 200,
                'event_name' => 'Online Meeting'
            ],
            [
                'id' => 300,
                'event_name' => 'School Event'
            ],
            [
                'id' => 500,
                'event_name' => 'MagkahiOSA Meeting'
            ],
        ]);
    }
}
