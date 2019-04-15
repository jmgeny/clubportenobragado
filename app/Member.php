<?php

namespace Porteno;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'mail', 'dni', 'nacimiento', 'ingreso','address','city_id','phone', 'estado',
        //'avatar',
    ];

        public function sports()
        {
            return $this->belongsToMany(Sport::class);
        }

        public function city()
        {
        	return $this->belongsTo(City::class);
        }

// Scope

        public function scopeName($query, $name) 
        {
            if($name)
                return $query->where('nombre','LIKE',"%$name%");
        }

        public function scopeApell($query, $apell) 
        {
            if($apell)
                return $query->where('apellido','LIKE',"%$apell%");
        }

        public function scopeMail($query, $mail) 
        {
            if($mail)
                return $query->where('mail','LIKE',"%$mail%");
        }

        public function scopeEstado($query, $estado)
        {
            if($estado)
                return $query->where('estado','LIKE', "%$estado%");
        }                
}
