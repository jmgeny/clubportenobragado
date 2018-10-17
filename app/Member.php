<?php

namespace Porteno;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'mail', 
    ];

        public function sports()
        {
            return $this->belongsToMany(Sport::class);
        }

        public function city()
        {
        	return $this->belongsTo(City::class);
        }

}
