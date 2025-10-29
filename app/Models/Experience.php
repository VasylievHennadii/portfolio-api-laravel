<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'experience_technologies');
    }
}
