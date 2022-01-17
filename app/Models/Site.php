<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Report;
use App\Models\Advertisement;

class Site extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'name'
    ];

    public function reports() {
        return $this->hasMany(Report::class);
    }

    public function ads(){
        return $this->belongsToMany(Advertisement::class, 'reports', 'site_id', 'ad_id');
    }
}
