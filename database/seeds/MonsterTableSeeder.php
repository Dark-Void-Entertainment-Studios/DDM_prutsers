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
            'name' => "Dark Magician",
        ]);

        DB::table('monsters')->insert([
            'name' => "Blue-Eyes White Dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Red-Eyes Black Dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Elemental Hero Neos",
        ]);

        DB::table('monsters')->insert([
            'name' => "Twin Long Rods #1",
        ]);

        DB::table('monsters')->insert([
            'name' => "Skull Servant",
        ]);

        DB::table('monsters')->insert([
            'name' => "Harpy Lady",
        ]);

        DB::table('monsters')->insert([
            'name' => "Gaia The Fierce Knight",
        ]);

        DB::table('monsters')->insert([
            'name' => "Celtic Guardian",
        ]);

        DB::table('monsters')->insert([
            'name' => "Baby Dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Gemini Elf",
        ]);

        DB::table('monsters')->insert([
            'name' => "kuriboh",
        ]);

        DB::table('monsters')->insert([
            'name' => "Odd-Eyes Dragon",
        ]);

        DB::table('monsters')->insert([
            'name' => "Jinzo",
        ]);

        DB::table('monsters')->insert([
            'name' => "Big Shield Gardna",
        ]);

        DB::table('monsters')->insert([
            'name' => "Man-Eater Bug",
        ]);

        DB::table('monsters')->insert([
            'name' => "Insect Queen",
        ]);

        DB::table('monsters')->insert([
            'name' => "Chaos Emperor Dragon - Envoy Of The End",
        ]);

        DB::table('monsters')->insert([
            'name' => "Aroma Jar",
        ]);

        DB::table('monsters')->insert([
            'name' => "Toon Mermaid",
        ]);

        DB::table('monsters')->insert([
            'name' => "Dark Rabbit",
        ]);

        DB::table('monsters')->insert([
            'name' => "Gagaga Magician",
        ]);

        DB::table('monsters')->insert([
            'name' => "Mataion The Timelord",
        ]);

        DB::table('monsters')->insert([
            'name' => "Speedroid Tri-Eyed Dice",
        ]);

        DB::table('monsters')->insert([
            'name' => "Manga Ryu-Ran",
        ]);

        DB::table('monsters')->insert([
            'name' => "Draconet",
        ]);

        DB::table('monsters')->insert([
            'name' => "Junk Syncron",
        ]);

        DB::table('monsters')->insert([
            'name' => "Time Wizard",
        ]);

        DB::table('monsters')->insert([
            'name' => "Dark Magician Girl",
        ]);
    }
}
