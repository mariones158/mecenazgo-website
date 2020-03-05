<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    /*     User::insert([
            "name" => 'entrepreneur',
            "password" => bcrypt('12345678'),
            "email" => 'entrepreneur@mecenazgo.com',
            "user_type" => 1,

            ]);


            User::insert([
                "name" => 'sponsor',
                "password" => bcrypt('12345678'),
                "email" => 'sponsor@mecenazgo.com',
                "user_type" => 1,
              ]); */

              factory(\App\User::class,10)->create();

    }
  }


