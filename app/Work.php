<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function activities()
    {
        return $this->belongsTo('App\Activity');
    }
}
