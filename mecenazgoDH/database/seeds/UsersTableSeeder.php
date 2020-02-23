<?php

use Illuminate\Database\Seeder;
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
        $jsonString = file_get_contents(base_path('json/projects.json'));

        $data = json_decode($jsonString);



       foreach ($data as $key => $value) {
        DB::table('users')->insert([
            'name' => $value->name,
            'firstname' => $value->firstname,
            'lastname' => $value->lastname,
            'identification_number' => $value->identification_number,
            'description' => $value->description,
            'avatar' => $value->avatar,
            'email' => $value->email,
            'password' => $value->password,
            'amount' => $value->amount,
            'user_type_id' =>$value->user_type_id,
             ]);

    }
  }
}
