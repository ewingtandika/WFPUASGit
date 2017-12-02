<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $guarded = ['id'];
    public function Kelasparalels()
    {
    	return $this->hasMany('App\Kelasparalel');
    }
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
