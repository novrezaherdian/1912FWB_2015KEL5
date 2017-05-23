<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekaman extends Model
{
    protected $table = 'rekaman';
    protected $fillable = ['id_rekaman','nama_rekaman'];
	protected $primaryKey = 'id_rekaman';
	public function Album()
	{
	return $this->hasOne('App\album');
	}
	

	
}
