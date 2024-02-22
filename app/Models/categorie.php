<?php

namespace App\Models;
use App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'image',
        
    ];


    // public function products(){
    //     return $this->hasOne('App/Models/product','category_id');
    // }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
