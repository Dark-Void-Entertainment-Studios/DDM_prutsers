<?php

use Illuminate\Database\Seeder;

class MonsterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monsters')->insert([
            'name' => "Dark magician",
        ]);

        DB::table('monsters')->insert([
            'name' => "Blue-eyes white dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Red-eyes black dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Elemental hero neos",
        ]);

        DB::table('monsters')->insert([
            'name' => "Twin long rods #1",
        ]);

        DB::table('monsters')->insert([
            'name' => "Skull servant",
        ]);

        DB::table('monsters')->insert([
            'name' => "Harpy lady",
        ]);

        DB::table('monsters')->insert([
            'name' => "Gaia the fierce knight",
        ]);

        DB::table('monsters')->insert([
            'name' => "Celtic guardian",
        ]);

        DB::table('monsters')->insert([
            'name' => "Baby dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Gemini elf",
        ]);

        DB::table('monsters')->insert([
            'name' => "kuriboh",
        ]);

        DB::table('monsters')->insert([
            'name' => "Odd-eyes dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Jinzo",
        ]);

        DB::table('monsters')->insert([
            'name' => "Big shield gardna",
        ]);

        DB::table('monsters')->insert([
            'name' => "Man-eater bug",
        ]);

        DB::table('monsters')->insert([
            'name' => "Insect queen",
        ]);

        DB::table('monsters')->insert([
            'name' => "Chaos emperor dragon - envoy of the end",
        ]);

        DB::table('monsters')->insert([
            'name' => "Aroma jar",
        ]);

        DB::table('monsters')->insert([
            'name' => "Toon mermaid",
        ]);

        DB::table('monsters')->insert([
            'name' => "Dark rabbit",
        ]);

        DB::table('monsters')->insert([
            'name' => "Gagaga magician",
        ]);

        DB::table('monsters')->insert([
            'name' => "Mataion the timelord",
        ]);

        DB::table('monsters')->insert([
            'name' => "Speedroid tri-eyed dice",
        ]);

        DB::table('monsters')->insert([
            'name' => "Manga ryu-ran",
        ]);

        DB::table('monsters')->insert([
            'name' => "Draconet",
        ]);

        DB::table('monsters')->insert([
            'name' => "Junk syncron",
        ]);

        DB::table('monsters')->insert([
            'name' => "Time wizard",
        ]);

        DB::table('monsters')->insert([
            'name' => "Dark magician girl",
        ]);
    }
}
