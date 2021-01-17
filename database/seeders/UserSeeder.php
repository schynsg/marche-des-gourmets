<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
            [
                [
                    'name' => 'roger',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('test')
                ]
            ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
