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
    public function Mahasiswas()
    {
    	return $this->belongsToMany('App\Mahasiswa','inputmatakuliahs');
    }
     public function Matakuliah()
    {
    	return $this->belongsTo('App\Matakuliah');
    }
     public function Dosen()
    {
    	return $this->belongsTo('App\Dosen');
    }
 
}
