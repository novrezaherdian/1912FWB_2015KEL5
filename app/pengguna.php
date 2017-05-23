<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 protected $table = 'pengguna';
    protected $fillable = ['id_pengguna','pengguna'];
	protected $primaryKey = 'id_pengguna';
class pengguna extends Model
{
    public public function akun()
    {
    	return $this->belongsTo('App\akun','id_pengguna')
    }
}
