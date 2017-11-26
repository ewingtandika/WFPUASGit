<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwalmatakuliah extends Model
{
     public function Kelasparalels()
    {
    	return $this->belongsTo('App\Kelasparalel');
    }
}
