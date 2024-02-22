<?php

namespace App\Models;
use App\Models\categorie;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'product_name',
        'product_image',
        'product_price',
        'product_description',
        'product_category',
        'product_status',
        
    ];

    // public function category(){
    //     return $this->hasOne('App/Models/product','category_id');
    // }
     
        public function categorie() {
            return $this->belongsTo(Categorie::class);
        }
   
}
