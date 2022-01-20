<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'muhammad.oktaviga@binus.ac.id',
                'password' => bcrypt('admin123123'),
                'address' => 'taman alfa indah blok k1 no.12A',
                'profile_img' => '',
                'admin_status' => 1,
            ]
        ]);
    }
}
