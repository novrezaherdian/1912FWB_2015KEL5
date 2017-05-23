<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahasa extends Model
{
    protected $table = 'bahasa';
    protected $fillable = ['id_bahasa','bahasa'];
	protected $primaryKey = 'id_bahasa';
	public function Lagu()
	{
	return $this->hasOne('App\Lagu'); 
	}

}
