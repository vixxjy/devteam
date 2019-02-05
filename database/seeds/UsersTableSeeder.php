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
            'username' => 'admin1',
            'email' => 'admin1@email.com',
            'password' => bcrypt('password'),
            'role' => 'Admin'
        ]);
        DB::table('users')->insert([
            'username' => 'admin2',
            'email' => 'admin2@email.com',
            'password' => bcrypt('password'),
            'role' => 'Editor'
        ]);
    }
}