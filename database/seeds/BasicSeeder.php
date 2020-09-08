<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'id'=> 1 ,
        //     'name' => 'Esteban Vilca',
        //     'email' => 'esteban.wilfredo@outlook.com',
        //     'points' => 1,
        //     'level' => 1,
        //     'password' => Hash::make('password'),
        // ]);
        DB::table('topics')->insert([
            'id'=> 1 ,
            'name' => 'Nature',
        ]);
        DB::table('topics')->insert([
            'id'=> 2 ,
            'name' => 'Small story',
        ]);
        DB::table('topics')->insert([
            'id'=> 3 ,
            'name' => 'Classic',
        ]);

    }
}
