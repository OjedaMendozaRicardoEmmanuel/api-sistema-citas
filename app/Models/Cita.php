<?php
namespace app\Models;

class Cita extends Model
{
  protected $table='cita';

  public function paciente($id)
  {
    return $this->belongsTo('paciente','paciente_id',$id);
  }
  public function doctor($id)
  {
    return $this->belongsTo('doctor','doctor_id',$id);
  }
  public function users($id)
  {
    return $this->belongsTo('usuarios','usuarios_id',$id);
  }
}