<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    protected $table = 'lagu';
    protected $fillable = ['id_lagu','judul','tahun_realease','id_bahasa','id_gendre'];
	protected $primaryKey = 'id_lagu';
	public function Baris()
	{
	return $this->hasOne('App\baris');
	}
	public function Bahasa()
	{
	return $this->belongsTo('App\bahasa','id_bahasa'); //kebalikan dari hasone di pengguna
	}

	public function Gendre()
	{
	return $this->belongsTo('App\gendre','id_gendre'); //kebalikan dari hasone di pengguna
	}
	
}
