<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
   protected $guarded = array('id');
   // 以下を追記
    public static $rules = array(
        'direction' => 'required',
        'days' => 'required',
        'starting_point'  => 'required',
        'season' => 'required',
        'person' => 'required',
        'budget' => 'required',
        'transportations' => 'required|array',
        'contact_body'  => 'required',
        'name'  => 'required',
        'email' => 'required|email',
        );
    
    public function transportations()
    {
        return $this->belongsToMany('App\Transportation');
    }
}
