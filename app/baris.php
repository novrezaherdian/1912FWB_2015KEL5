<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baris extends Model
{
    protected $table = 'list';
    protected $fillable = ['id_list','id_lagu','id_album','id_penyanyi'];
	protected $primaryKey = 'id_list';
	public function List_pengguna()
	{
	return $this->hasOne('App\list_pengguna'); //kebalikan dari hasone di pengguna
	}

	public function Lagu()
	{
	return $this->belongsTo('App\Lagu','id_lagu'); //kebalikan dari hasone di pengguna
	}
	public function Album()
	{
	return $this->belongsTo('App\album','id_album');
	}
	public function Penyanyi()
	{
	return $this->belongsTo('App\penyanyi','id_penyanyi');
	}
}
