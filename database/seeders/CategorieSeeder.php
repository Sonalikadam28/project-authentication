<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/categories.json');
           $categories=collect(json_decode($json));
        
    
          $categories->each(function($categorie){
            categorie::create([
                'name' => $categorie->name,
                'image' =>  $categorie->image,
                
             ]);
          });
    }
}
