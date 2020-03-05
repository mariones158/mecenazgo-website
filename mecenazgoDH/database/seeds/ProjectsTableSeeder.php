<?php

use Illuminate\Database\Seeder;
use App\Project;

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

        DB::table('projects') ->insert([
               'user_id' => '1',
               'name' => 'prototipo',
               'title' => 'gadget',
               'image' => 'img/OSS0609_gadgetPlant.jpg',
               'colour' => 'green',
               'description' => 'gadget para el hogar',
               'amount'=> '30',

            ]);

            factory(\App\Project::class,10)->create();


         }
    }

