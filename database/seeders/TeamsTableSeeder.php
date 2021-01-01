<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d H:i:s");
        $teams = [
            [
                'user_id' => 1,
                'name' => 'Fred\'s Team',
                'personal_team' => 1,
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'user_id' => 2,
                'name' => 'Admin\'s Team',
                'personal_team' => 2,
                'created_at' => $date,
                'updated_at' => $date
            ],
            [
                'user_id' => 3,
                'name' => 'Basic\'s Team',
                'personal_team' => 3,
                'created_at' => $date,
                'updated_at' => $date
            ]
        ];

        Team::insert($teams);
    }
}
