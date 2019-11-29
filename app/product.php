<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Category;

class product extends Model
{
    protected $fillable = ['name', 'price', 'categories_id'];

    public function category()
    {
        return $this->belongsTo('\App\Category', 'categories_id');
    }
}
