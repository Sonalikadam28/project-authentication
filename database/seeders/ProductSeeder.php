<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products->each(function($product){
            categorie::create([
                'product_name' => $product->name,
                'product_image' =>  $product->image,
                'product_price' =>  $product->price,
                'product_description' =>  $product->description,
                'product_category' =>  $product->category,
                'product_stautus' =>  $product->status,
             ]);
          });
    }
}
