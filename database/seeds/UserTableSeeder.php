<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "adminTest",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('wachtwoord'),
            'role_id' => 2,
            'email_verified_at' => Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => "superUser",
            'email' => 'superuser@gmail.com',
            'role_id' => 3,
            'password' => bcrypt('wachtwoord'),
            'email_verified_at' => Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => "guestTest",
            'email' => 'guest@gmail.com',
            'password' => bcrypt('wachtwoord'),
        ]);
    }
}
