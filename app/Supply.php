<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public function supply()
    {
        return $this->belongsTo('\App\Purchase_Rule', 'id', 'supply_id');
    }
}
