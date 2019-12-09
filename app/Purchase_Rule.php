<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Rule extends Model
{
    protected $table = "purchase_rules";

    public function purchase() 
    {	
		return $this->hasOne('\App\Purchase', 'id', 'purchase_id');
    }

    public function supply()
    {
        return $this->hasOne('\App\Supply', 'id', 'supply_id');
    }

}
