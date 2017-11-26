<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inputperwalian extends Model
{
   protected $guarded = ['id'];
    public function Inputmatakuliahs()
    {
    	return $this->hasMany('App\Inputmatakuliah');
    }
}
