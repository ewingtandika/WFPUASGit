<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $guarded = ['id'];
    public function KelasParalels()
    {
    	return $this->belongsToMany('App\KelasParalel','inputmatakuliahs')->withPivot('status');
    }
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
