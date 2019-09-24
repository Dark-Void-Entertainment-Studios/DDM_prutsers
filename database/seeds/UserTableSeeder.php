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
            'userRights' => 1,
            'email_verified_at' => Carbon\Carbon::now()
        ]);
    }
}
