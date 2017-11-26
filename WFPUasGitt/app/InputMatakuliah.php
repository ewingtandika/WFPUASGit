<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inputmatakuliah extends Model
{
     public function Mahasiswas()
    {
    	return $this->belongsTo('App\Mahasiswa');
    }
     public function Inputperwalians()
    {
    	return $this->belongsTo('App\Inputperwalian');
    }
     public function kelasparalels()
    {
    	return $this->belongsTo('App\Kelasparalel');
    }
}
