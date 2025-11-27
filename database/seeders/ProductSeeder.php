<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++)
            {
                Product::create([
                    'name'        => 'منتج ' . $i,
                    'description' => 'وصف المنتج ' . $i,
                    'price'       => rand(10, 500),
                    'quantity'    => rand(1, 50),
                    'imagepath'   => 'assets/img/' . rand(1, 16) . '.jpg',
                    'category_id' => rand(1, 11),
                ]);
            }
    }
}
