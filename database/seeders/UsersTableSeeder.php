<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'           => 'Fred GEFFRAY',
                'firstname'      => 'Fred',
                'lastname'       => 'GEFFRAY',
                'email'          => 'fred.geffray@gmail.com',
                'password'       => bcrypt('lespaul96'),
                'remember_token' => null,
                'current_team_id'=> 1
            ],
            [
                'name'           => 'Admin User',
                'firstname'      => 'Admin',
                'lastname'       => 'User',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'current_team_id'=> 2
            ],
            [
                'name'           => 'Basic User',
                'firstname'      => 'Basic',
                'lastname'       => 'User',
                'email'          => 'user@user.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'current_team_id'=> 3
            ],
        ];

        User::insert($users);
    }
}
