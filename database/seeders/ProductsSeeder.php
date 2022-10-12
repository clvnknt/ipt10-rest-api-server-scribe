<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Jacket',
            'description' => 'Given Jacket Description',
            'currency' => 'PHP',
            'price' => 1234.56,
            'brand' => 'KuyaWill',
            'category' => 'apparel',
            'image' => 'https://netstorage-kami.akamaized.net/images/0fgjhs1shmj74jpi4g.jpg?&imwidth=1200',
        ]);

        DB::table('products')->insert([
            'title' => 'This Book Loves You',
            'description' => 'Given Book Description',
            'currency' => 'PHP',
            'price' => 645.05,
            'brand' => 'PewDiePie',
            'category' => 'book',
            'image' => 'https://cdn.vox-cdn.com/thumbor/Djm0iYYHTvlevZ-M9tSoD7DChdk=/124x0:1474x900/1400x1050/filters:focal(124x0:1474x900):format(png)/cdn.vox-cdn.com/uploads/chorus_image/image/46524702/pewdiepie-this-book-loves-you_1600.0.0.png?&imwidth=1200'
        ]);

        DB::table('products')->insert([
            'title' => 'POCO F3',
            'description' => 'Given Device Description',
            'currency' => 'PHP',
            'price' => 18640.00,
            'brand' => 'POCO',
            'category' => 'electronic device',
            'image' => 'https://www.pinoytechnoguide.com/wp-content/uploads/2021/03/POCO-F3.jpg?&imwidth=1200'
        ]);
    }
}