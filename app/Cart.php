<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   protected $guarded = [];

    public function item() {
    	return $this->belongsTo(Item::class);
    }
}
