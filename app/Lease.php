<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $fillable = ['lease_type_id', 'customer_id', 'finance_id'];


}
