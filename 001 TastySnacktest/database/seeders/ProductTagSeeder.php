<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_tags')->insert([
            ['product_id' => 1, 'tag_id' => 1],
            ['product_id' => 1, 'tag_id' => 7],
            ['product_id' => 2, 'tag_id' => 2],
            ['product_id' => 2, 'tag_id' => 3],
            ['product_id' => 2, 'tag_id' => 7],
            ['product_id' => 3, 'tag_id' => 2],
            ['product_id' => 3, 'tag_id' => 3],
            ['product_id' => 3, 'tag_id' => 7],
            ['product_id' => 4, 'tag_id' => 6],
            ['product_id' => 4, 'tag_id' => 8],
            ['product_id' => 5, 'tag_id' => 6],
            ['product_id' => 5, 'tag_id' => 8],

            ['product_id' => 6, 'tag_id' => 5],
            ['product_id' => 6, 'tag_id' => 7],
            ['product_id' => 7, 'tag_id' => 5],
            ['product_id' => 7, 'tag_id' => 7],
            ['product_id' => 8, 'tag_id' => 5],
            ['product_id' => 8, 'tag_id' => 7],
            ['product_id' => 9, 'tag_id' => 5],
            ['product_id' => 9, 'tag_id' => 7],
            ['product_id' => 10, 'tag_id' => 5],
            ['product_id' => 10, 'tag_id' => 7],
        ]);
    }
}
