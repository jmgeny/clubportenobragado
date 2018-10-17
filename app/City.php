<?php

namespace Porteno;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function member()
    {
    	return $this->belongsTo(Members::class);
    }
}
