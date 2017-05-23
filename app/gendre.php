<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gendre extends Model
{
    protected $table = 'gendre';
    protected $fillable = ['id_gendre','gendre'];
	protected $primaryKey = 'id_gendre';
	public function Lagu()
	{
	return $this->hasOne('App\Lagu'); 
	}//
}
