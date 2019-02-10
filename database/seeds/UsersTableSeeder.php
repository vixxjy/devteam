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
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'Admin'
        ]);
        DB::table('users')->insert([
            'username' => 'editor',
            'email' => 'editor@editor.com',
            'password' => bcrypt('password'),
            'role' => 'Editor'
        ]);
    }
}