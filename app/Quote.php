<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = ['sales_id', 'customer_id', 'product'];

    protected $table = 'quotations';
}
