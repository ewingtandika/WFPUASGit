<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $guarded = ['id'];
    public function menus()
    {
    	return $this->hasMany('App\Menu');
    }
}
