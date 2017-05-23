<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class akun extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'akun';
    protected $fillable = ['username','password'];
	protected $guarded = ['id']; 

public function Pengguna(){
	return $this->hashOne('App\pengguna');
}
	
}
