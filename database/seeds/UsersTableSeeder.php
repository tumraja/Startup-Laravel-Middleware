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
            'name' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'super_admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
