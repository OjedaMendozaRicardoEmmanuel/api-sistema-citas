<?php
namespace app\Models;

class Role extends Model
{
  protected $table='roles';

  public function users($id)
  {
    return $this->belongsToMany('usuarios',$id);
  }
  public function addPermiso($data)
  {
    return $this->attach('permisos_roles',$data);
  }
  public function deletePermiso($data)
  {
    return $this->detach('permisos_roles',$data);
  }
}