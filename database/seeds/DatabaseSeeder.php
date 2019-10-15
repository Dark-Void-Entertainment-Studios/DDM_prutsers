<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
        $this->call(CharactersSeeder::class);
=======
         $this->call([
             UserTableSeeder::class,
             MonsterTableSeeder::class,
             CharactersSeeder::class
         ]);
>>>>>>> development
    }
}
