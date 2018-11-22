<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $fillable = ['name','description', 'price_cost','price_resale'];

public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function brands()
    {
        return $this->hasMany('App\Brand');
    }

public function providers()
    {
        return $this->hasMany('App\Provider');
    }

}
