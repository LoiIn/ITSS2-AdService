<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_id', 'product_id', 'title', 'started_date', 'ended_date', 'content'
    ];
}
