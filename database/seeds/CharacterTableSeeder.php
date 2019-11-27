<?php

use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('personas')->insert([
    		'name' => "Artificial Intelligence (A.I.)",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Jaden Yuki",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Joey Wheeler",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Mai Valentine",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Maximillion Pegasus",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Ruff Ruff McDogg",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Seto Kaiba",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Téa Gardner",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Yugi Muto",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Yugo",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Yuma Tsukumo",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Yusaku Fujiki",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Yusei Fudo",
    ]);

    	DB::table('personas')->insert([
    		'name' => "Z-one",
    ]);
	}
}