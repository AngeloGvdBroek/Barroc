<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public function lease()
    {
    	return $this->hasMany('\App\Lease', 'lease_id', 'id');
    }
}
