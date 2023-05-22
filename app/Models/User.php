<?php
namespace app\Models;

class User extends Model
{
  protected $table='usuarios';

  public function cars($id)
  {
    return $this->hasMany('cars',$id);
  }
  public function roles($id)
  {
    return $this->belongsToMany('roles',$id);
  }
  public function addRol($data)
  {
    return $this->attach('roles_usuarios',$data);
  }
  public function deleteRol($data)
  {
    return $this->detach('roles_usuarios',$data);
  }
}
