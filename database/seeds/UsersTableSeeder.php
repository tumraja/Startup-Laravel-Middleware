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
            'name' => 'Admin Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'ability' => 'ADMIN',
        ]);

        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('secret'),
            'ability' => 'SUPER_ADMIN',
        ]);

        DB::table('users')->insert([
            'name' => 'Member Member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('secret'),
            'ability' => 'MEMBER',
        ]);
    }
}
