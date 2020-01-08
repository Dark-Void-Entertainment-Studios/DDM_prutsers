<?php

use Illuminate\Database\Seeder;

class TrapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traps')->insert([
            'name' => "Trap Hole",
            'effect' => "The monster that stapped on this trap takes 20 damage.",
        ]);

        DB::table('traps')->insert([
            'name' => "Lockup",
            'effect' => "The monster that stapped on this trap is locked in place for 3 turns.",
        ]);

        DB::table('traps')->insert([
            'name' => "Sword and Shield",
            'effect' => "The monster that stapped on this trap has it's attack and defence swapped.",
        ]);

        DB::table('traps')->insert([
            'name' => "Shield and Sword",
            'effect' => "The monster that stapped on this trap has it's defence and attack swapped.",
        ]);

        DB::table('traps')->insert([
            'name' => "Mimic",
            'effect' => "The monster that stapped on this trap is destroyed.",
        ]);

        DB::table('traps')->insert([
            'name' => "Steal Crest",
            'effect' => "When stepped on this trap your opponent steals 3 random crests.",
        ]);

        DB::table('traps')->insert([
            'name' => "Unending Rage",
            'effect' => "The monster that stapped on this trap must attack every monster that comes in its path.",
        ]);

        DB::table('traps')->insert([
            'name' => "Pacifist",
            'effect' => "The monster that stapped on this trap cannot attack any monster.",
        ]);

        DB::table('traps')->insert([
            'name' => "Begone Thot",
            'effect' => "The monster that stapped on this trap is send back to the owners deck.",
        ]);

        DB::table('traps')->insert([
            'name' => "Binding Circle",
            'effect' => "The monster that stapped on this trap is unaffected by any other traps but it loses 10 attack."
        ]);
    }
}
