s<?php

use Illuminate\Database\Seeder;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('characters')->insert([
    		'name' => "Artificial Intelligence (A.I.)",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Jaden Yuki",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Joey Wheeler",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Mai Valentine",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Maximillion Pegasus",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Ruff Ruff McDogg",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Seto Kaiba",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Téa Gardner",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Yugi Muto",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Yugo",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Yuma Tsukumo",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Yusaku Fujiki",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Yusei Fudo",
    ]);

    	DB::table('characters')->insert([
    		'name' => "Z-one",
    ]);
	}
}