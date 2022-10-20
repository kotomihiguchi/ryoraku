<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    public function inquiries()
    {
        return $this->belongsToMany('App\Inquiry');
    }
}
