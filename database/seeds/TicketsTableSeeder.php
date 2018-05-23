<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 1,
            'type_id' => 4
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 1,
            'type_id' => 7
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 2,
            'type_id' => 3
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 2,
            'type_id' => 8
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 2,
            'type_id' => 1
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 2,
            'type_id' => 1
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 2,
            'type_id' => 5
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 2,
            'type_id' => 6
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 3,
            'type_id' => 3
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 1,
            'type_id' => 8
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 3,
            'type_id' => 9
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 3,
            'type_id' => 9
        ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 4,
            'type_id' => 7
        ]);
        DB::table('tickets')->insert([
        'user_email' => 'aymeric.pasco@gmail.com',
        'content' => 'aaa',
        'state_id' => 4,
        'type_id' => 2
    ]);
        DB::table('tickets')->insert([
            'user_email' => 'aymeric.pasco@gmail.com',
            'content' => 'aaa',
            'state_id' => 4,
            'type_id' => 1
        ]);
    }
}
