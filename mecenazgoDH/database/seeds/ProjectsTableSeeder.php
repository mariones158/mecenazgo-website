<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProjectsTableSeeder extends Seeder
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
          DB::table('projects')->insert([

              'donation_id' => $value->donation_id,
              'deposit_id' => $value->deposit_id,
              'user_id' => $value->user_id,
              'title' => $value->title,
              'image' => $value->image,
              'colour' => $value->colour,
              'description' => $value->description,
              'amount' => $value->amount,
              'status' => $value->status,
              'description_detail' => $value->description_detail,
              'description_general' => $value->description_general,
              'description_title' => $value->description_title,
              'created_at' => date('Y-m-d H:i:s', $value->created_at),
          ]);
       }
    }
}
