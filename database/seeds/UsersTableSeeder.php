<?php

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
     	DB::table('users')->insert([
            'name' => 'Mohamad Sholihin',
            'email' => 'mohamad.sholihin.it@gmail.com',
            'phone' => '085718948898',
            'address' => 'Bojong Gede',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
    }
}
