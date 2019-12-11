<?php

use Illuminate\Database\Seeder;

class SpellTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spells')->insert([
            'name' => 'medkit' ,
            'effect' => 'Heal 20HP from a monster',
        ]);

        DB::table('spells')->insert([
            'name' => 'boost movement' ,
            'effect' => 'Dubble the movement',
        ]);

        DB::table('spells')->insert([
            'name' => 'monster reborn' ,
            'effect' => 'Return a monster from the death',
        ]);

        DB::table('spells')->insert([
            'name' => 'swords of revealing path' ,
            'effect' => 'block a squire for 3 turns',
        ]);

        DB::table('spells')->insert([
            'name' => 'spell chest' ,
            'effect' => 'Place a chest in your opponents dungeon with a buff or debuff',
        ]);

        DB::table('spells')->insert([
            'name' => 'switcharoo' ,
            'effect' => 'switch the location of 2 of your monsters',
        ]);

        DB::table('spells')->insert([
            'name' => 'knockback' ,
            'effect' => 'target a monster when that monster attacks',
        ]);

        DB::table('spells')->insert([
            'name' => 'alore parfum' ,
            'effect' => 'target one of your monsters your opponents monsters can only attack that monster',
        ]);

        DB::table('spells')->insert([
            'name' => 'forbidden lance' ,
            'effect' => 'targeted monster loses 10 atk but becomes unaffected by trap effects',
        ]);

        DB::table('spells')->insert([
            'name' => 'leap of faith' ,
            'effect' => 'target a monster if that monster is next to another monster jump over it',
        ]);
    }
}
