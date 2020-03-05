<?php

use Illuminate\Database\Seeder;

use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = array(
            ['source' => 'default.png','type' =>"project"],
            ['source' => 'default.png','type' =>"project"],

        );
        foreach($photos as $photo)
        {
            Photo::insert($photo);
        }
    }
    }

