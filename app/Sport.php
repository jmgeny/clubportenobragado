<?php

namespace Porteno;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function members()
        {
            return $this->belongsToMany(Member::class);
        }
}
