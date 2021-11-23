<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;
use App\Models\Sites;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ad_id', 'site_id', 'views', 'clicks'
    ];

    // get advertisement
    public function advertisement() {
        return $this->belongsTo(Advertisement::class, 'ad_id');
    }

    // get site
    public function site() {
        return $this->belongsTo(Site::class, 'site_id');
    }

    // public function storeOwner() {
    //     return $this->hasOneThrough(Report::class, Car::class);
    // }
}
