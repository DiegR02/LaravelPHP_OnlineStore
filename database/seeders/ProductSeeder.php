<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Product 1', 'description' => 'Description of product 1', 'price' => 10.00, 'image' => 'image1.png'],
            ['name' => 'Product 2', 'description' => 'Description of product 2', 'price' => 20.00, 'image' => 'image2.png'],
            ['name' => 'Product 3', 'description' => 'Description of product 3', 'price' => 30.00, 'image' => 'image3.png'],
            
        ];
    
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
