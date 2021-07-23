<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::create([
            'name' => 'Mehedi Hasan',
            'email' => 'mehedi@gmail.com',
            'password' => bcrypt('password'),

        ]);
        // DB::table('users')->insert([
        //     'name' => 'Mehedi Hasan',
        //     'email' => 'mehedi@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

    }
}
