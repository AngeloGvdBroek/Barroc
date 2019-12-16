<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $fillable = ['lease_type_id', 'customer_id', 'finance_id'];

    public function user()
    {
    	return $this->hasOne('\App\User', 'id', 'customer_id');
    }

    public function finance() 
    {
        return $this->hasOne('\App\User', 'id', 'finance_id');
    }

    public function supplies()
    {
    	return $this->belongsToMany('\App\Supply', 'lease_rules');
    }
}
