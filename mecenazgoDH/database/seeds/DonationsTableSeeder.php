<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $jsonString = file_get_contents(base_path('json/donations.json'));

        $data = json_decode($jsonString);


        foreach ($data as $key => $value) {
        DB::table('donations')->insert([
        'project_id' => 1,
        'donation_id' => 3,
        'amount' => $value->randomFloat(2,999,99999),

        ]);
    }
    }
}
