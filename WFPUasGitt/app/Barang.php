<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }
}
