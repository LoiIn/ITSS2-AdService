<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;
use App\Models\Store;
use App\Models\Category;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_id', 'title', 'image'
    ];

    public function advertisements (){
        return $this->hasMany(Advertisement::class,'product_id', 'id');
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }
}
