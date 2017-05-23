<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyanyi extends Model
{
     protected $table = 'penyanyi';
    protected $fillable = ['id_penyanyi','nama_penyanyi','jenis_kelamin'];
	protected $primaryKey = 'id_penyanyi';
	

	public function Baris()
	{
	return $this->hasOne('App\baris');
	}

}
