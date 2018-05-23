<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => 'new',
            'display_name' => 'Nouvelle demande',
        ]);

        DB::table('states')->insert([
            'name' => 'progress',
            'display_name' => 'En cours de traitement',
        ]);

        DB::table('states')->insert([
            'name' => 'waiting',
            'display_name' => 'En attente',
        ]);

        DB::table('states')->insert([
            'name' => 'complete',
            'display_name' => 'Demande traitée',
        ]);
        //4
    }
}
