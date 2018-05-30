<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    //
    public function items()
    {
    	return $this->hasMany('App\Item');
    }
}
