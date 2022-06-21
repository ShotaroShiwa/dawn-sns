<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'username'=>'dawn一郎',
                'mail'=>'ichiro@examle.com',
                'password'=>'1111',
            ]
        ]);
    }
}
