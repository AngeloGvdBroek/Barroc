<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workorder extends Model
{
    protected $fillable = ['work_adress', 'description', 'total_price'];
}

