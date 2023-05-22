<?php
namespace app\Models;

class Permisos extends Model
{
  protected $table='permisos';

  public function roles($id)
  {
    return $this->belongsToMany('roles',$id);
  }
  public function attachPermiso($data)
  {
    return $this->attach('permisos_roles',$data);
  }
  public function detachPermiso($data)
  {
    return $this->detach('permisos_roles',$data);
  }
}