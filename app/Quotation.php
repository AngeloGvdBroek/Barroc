<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = ['sales_id', 'customer_id', 'product'];

    protected $table = 'quotations';

    public function purchase()
    {
        return $this->belongsTo('\App\Purchase', 'id', 'quotation_id');
    }

    public function user()
    {
    	return $this->hasOne('\App\User', 'id', 'customer_id');
    }

    public function sale() 
    {
        return $this->hasOne('\App\User', 'id', 'sales_id');
    }
}
