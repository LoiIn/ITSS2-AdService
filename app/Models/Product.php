<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'site_id', 'title', 'image'
    ];

    public function advertisement (){
        return $this->hasOne(Advertisement::class,'product_id', 'id');
    }

}
