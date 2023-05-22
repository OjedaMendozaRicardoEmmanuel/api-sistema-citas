<?php
namespace app\Models;

class Doctor extends Model
{
  protected $table='doctor';

  public function user($id)
  {
    return $this->belongsTo('usuarios','usuarios_id',$id);
  }
  public function especialidad($id)
  {
    return $this->belongsToMany('especialidad',$id);
  }
  public function addEspecialidad($data)
  {
    return $this->attach('doctor_especialidad',$data);
  }
  public function deleteEspecialidad($data)
  {
    return $this->detach('doctor_especialidad',$data);
  }
}