<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $guarded = ['id'];
    public function Inputmatakuliahs()
    {
    	return $this->hasMany('App\Inputmatakuliah');
    }
}
