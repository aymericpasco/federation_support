<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'other',
            'display_name' => 'Autre',
        ]);

        DB::table('types')->insert([
            'name' => 'bug_display',
            'display_name' => 'Problème d\'affichage',
        ]);

        DB::table('types')->insert([
            'name' => 'bug_content',
            'display_name' => 'Problème de contenu/données',
        ]);

        DB::table('types')->insert([
            'name' => 'user_experience',
            'display_name' => 'Expérience utilisateur',
        ]);

        DB::table('types')->insert([
            'name' => 'general_bug',
            'display_name' => 'Problème général',
        ]);

        DB::table('types')->insert([
            'name' => 'proposition',
            'display_name' => 'Proposition d\'ajout de fonctionnalité',
        ]);

        DB::table('types')->insert([
            'name' => 'proposition_remove',
            'display_name' => 'Proposition de retrait de fonctionnalité',
        ]);

        DB::table('types')->insert([
            'name' => 'proposition_best',
            'display_name' => 'Proposition d\'amélioration de fonctionnalité',
        ]);

        DB::table('types')->insert([
            'name' => 'proposition_design',
            'display_name' => 'Proposition de design',
        ]);
        // 9
    }
}
