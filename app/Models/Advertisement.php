<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Store;
use App\Models\Report;

class Advertisement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_id', 'product_id', 'title', 'started_date', 'ended_date', 'content', 'image'
    ];

    public function product () {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function store () {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }
}
