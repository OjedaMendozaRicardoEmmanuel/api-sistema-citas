<?php
namespace app\Models;

class Expediente extends Model
{
  protected $table='expediente';

  public function cita($id)
  {
    return $this->belongsTo('cita','cita_id',$id);
  }
}