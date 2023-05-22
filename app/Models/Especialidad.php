<?php
namespace app\Models;

class Especialidad extends Model
{
  protected $table='especialidad';
  public function doctor($id)
  {
    return $this->belongsToMany('doctor',$id);
  }
}