<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {
protected $guarded = [];
public function contactos()
{
	return $this->belongsToMany('App\Contacto');
}
public function citas()
{
	return $this->belongsToMany('App\Cita');
}

}
