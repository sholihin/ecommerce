<?php

use Illuminate\Database\Seeder;
use App\User;
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
                'name' => 'Mohamad Sholihin',
                'email' => 'sholihin@gmail.com',
                'phone' => '085718948898',
                'address' => 'Bojong Gede',
                'password' => bcrypt('user'),
                'role' => 'user',
            ],
            [
                'name' => 'Ade Dandhi',
                'email' => 'dandi@gmail.com',
                'phone' => '0857xxxxxx',
                'address' => 'Cibinong',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ]
        ];

        User::insert($users);
    }
}
