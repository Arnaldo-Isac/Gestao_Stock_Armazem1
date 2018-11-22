<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
    
    public function brands()
    {
        return $this->hasMany('App\Brand');
    }
}
