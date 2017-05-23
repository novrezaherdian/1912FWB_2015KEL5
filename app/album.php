<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = 'album';
    protected $fillable = ['id_album','nama_album','urutan_lagu','id_rekaman'];
	protected $primaryKey = 'id_album';
	public function Baris()
	{
	return $this->hasOne('App\baris');
	}
	public function Rekaman()
	{
	return $this->belongsTo('App\rekaman','id_rekaman'); //kebalikan dari hasone di pengguna
	}

	
}
