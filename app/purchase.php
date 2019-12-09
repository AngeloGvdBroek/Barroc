<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function supplies()
    {
        return $this->belongsToMany('\App\Supply', 'purchase_rules');
    }

    public function quotation(){
    	return $this->hasMany('\App\Quotation', 'quotation_id', 'id');
    }
}