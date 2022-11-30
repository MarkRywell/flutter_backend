<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                'id' => 1001,
                'name' => 'Intern'
            ],
            [
                'id' => 3100,
                'name' => 'Junior Back-End Developer'
            ],
            [
                'id' => 3200,
                'name' => 'Junior Front-End Developer'
            ],
            [
                'id' => 4100,
                'name' => 'Senior Back-End Developer'
            ],
            [
                'id' => 4200,
                'name' => 'Senior Front-End Developer'
            ],
            [
                'id' => 4300,
                'name' => 'Quality Assurance'
            ],
            [
                'id' => 5400,
                'name' => 'Chief Operation Officer'
            ],
            [
                'id' => 5500,
                'name' => 'Chief Executive Officer'
            ],
        ];

        DB::table('positions')->insert($positions);
    }
}
