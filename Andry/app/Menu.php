<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }
}
