<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelasparalel extends Model
{
    protected $guarded = ['id'];
    public function Jadwalmatakuliahs()
    {
    	return $this->hasMany('App\Jadwalmatakuliah');
    }
    public function Inputmatakuliahs()
    {
    	return $this->hasMany('App\Inputmatakuliah');
    }
     public function Matakuliahs()
    {
    	return $this->belongsTo('App\Matakuliah');
    }
     public function Dosens()
    {
    	return $this->belongsTo('App\Dosen');
    }
 
}
