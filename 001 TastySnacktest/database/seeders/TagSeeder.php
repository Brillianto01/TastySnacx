<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['tag_name' => 'Cereals'],      //1
            ['tag_name' => 'Chocolate'],    //2
            ['tag_name' => 'candy'],        //3
            ['tag_name' => 'coffee'],       //4
            ['tag_name' => 'soft drink'],   //5
            ['tag_name' => 'chips'],        //6
            ['tag_name' => 'sweet'],        //7
            ['tag_name' => 'savory'],       //8
        ]);
    }
}
