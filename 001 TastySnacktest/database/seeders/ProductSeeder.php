<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['category_id' => 1, 'product_name' => "Lucky Charms", 'product_flavor' => "Original with Marshmallow", 'Brand' => "General Mills", 'product_img' => "https://res.cloudinary.com/general-mills/image/upload/q_auto,f_auto/luckyCharmsUS/wp-content/uploads/2021/04/MicrosoftTeams-image-131.png", 'product_price' => 45000, 'product_desc' => "Lucky Charms Cereal"],
            ['category_id' => 1, 'product_name' => "KitKat", 'product_flavor' => "Matcha", 'Brand' => "Nestle", 'product_img' => "https://cf.shopee.co.id/file/cd4254ed6ea26cb7366a1134c66299d0", 'product_price' => 15000, 'product_desc' => "Kit Kat matcha flavor straight from JAPAN"],
            ['category_id' => 1, 'product_name' => "KitKat", 'product_flavor' => "Sakura", 'Brand' => "Nestle", 'product_img' => "https://images.tokopedia.net/img/cache/500-square/product-1/2020/9/7/86731078/86731078_d19de662-b25c-4fa5-ab4d-be8436790f57_560_560", 'product_price' => 15500, 'product_desc' => "Kit Kat Sakura flavor straight from JAPAN"],
            ['category_id' => 1, 'product_name' => "Kettle Brand Potato Chip ", 'product_flavor' => "Sea Salt", 'Brand' => "Kettle Brand", 'product_img' => "https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/5/20/a2b3e7a3-fb8d-43c8-bcb4-bedf5abe5855.jpg", 'product_price' => 50000, 'product_desc' => "Sea Salt Flavor from Kettle Brand Chip"],
            ['category_id' => 1, 'product_name' => "Kettle Brand Potato Chip ", 'product_flavor' => "Sea Salt and Vinegar", 'Brand' => "Kettle Brand", 'product_img' => "https://images.tokopedia.net/img/cache/500-square/product-1/2019/4/27/61112200/61112200_c6176f6c-dc80-44db-b4bb-755ef6498026_726_726.jpg", 'product_price' => 50000, 'product_desc' => "Sea Salt and Vinegar Flavor from Kettle Brand Chip"],

            ['category_id' => 2, 'product_name' => "Dr. Pepper", 'product_flavor' => "Original", 'Brand' => "Dr Pepper Snapple Group", 'product_img' => "https://produits.bienmanger.com/11605-0w470h470_Pepper.jpg", 'product_price' => 20000, 'product_desc' => "Classic Dr. Pepper Flavor"],
            ['category_id' => 2, 'product_name' => "Dr. Pepper", 'product_flavor' => "Cherry", 'Brand' => "Dr Pepper Snapple Group", 'product_img' => "https://produits.bienmanger.com/27685-0w470h470_Pepper_Cherry.jpg", 'product_price' => 20000, 'product_desc' => "Cherry Dr. Pepper Flavor"],
            ['category_id' => 2, 'product_name' => "Mountain Dew", 'product_flavor' => "Citrus Blast", 'Brand' => "PepsiCo", 'product_img' => "https://snack.je/wp-content/webpc-passthru.php?src=https://snack.je/wp-content/uploads/2021/08/Mountain-Dew-Citrus-Blast-330ml.png&nocache=1", 'product_price' => 20000, 'product_desc' => "Classic Flavor of Mountain Dew"],
            ['category_id' => 2, 'product_name' => "Mountain Dew", 'product_flavor' => "Baja Blast", 'Brand' => "PepsiCo", 'product_img' => "https://www.myamericanmarket.com/10676/mountain-dew-baja-blast-soda.jpg", 'product_price' => 50000, 'product_desc' => "Limited Edition Baja Blast Flavor from Mountain"],
            ['category_id' => 2, 'product_name' => "Pepsi", 'product_flavor' => "Wild Cherry", 'Brand' => "PepsiCo", 'product_img' => "https://m.media-amazon.com/images/I/71pfiM3E5EL._SL1500_.jpg", 'product_price' => 15000, 'product_desc' => "New flavor from Pepsi"],
        ]);
    }
}
