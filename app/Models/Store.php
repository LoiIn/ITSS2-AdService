<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;
use App\Models\Report;
use App\Models\Product;

class Store extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'stores';

    protected $guarded = 'store';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'name', 'address', 'phone', 'logo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function advertisements (){
        return $this->hasMany(Advertisement::class,'store_id', 'id');
    }

    public function adReports() {
        return $this->hasOneThrough(Report::class, Advertisement::class, 'store_id', 'ad_id', 'id', 'id');
    }

    public function products() {
        return $this->hasMany(Product::class, 'store_id');
    }
}
