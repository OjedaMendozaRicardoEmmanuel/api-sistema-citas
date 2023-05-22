<?php
namespace app\Models;

class Paciente extends Model
{
  protected $table='paciente';

  public function citas($id)
  {
    return $this->hasMany('cita',$id);
  }
}