<?php
namespace app\Controllers;

use app\Models\Role;
use bootstrap\Request;

class RoleController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function users($id)
  {
    $modelRole= new Role();
    return $modelRole->users($id);
  }
  public function getAll()
  {
    $modelRole= new Role();
    return $modelRole->all();
  }
  public function findById($id)
  {
    $modelRole= new Role();
    return $modelRole->find($id);
  }
  public function create()
  {
    $nombre = $this->request->getFormData()['nombre']; 
  
    $modelRole= new Role();
    return $modelRole->create([
      'nombre' => $nombre
    ]);
  }  
  public function update($id)
  {
    $nombre = $this->request->getFormData()['nombre'];
  
    $modelRole= new Role();
    return $modelRole->update($id, [
      'nombre' => $nombre
    ]);
  }
  public function delete($id)
  {
    $modelRole= new Role();
    return $modelRole->delete($id);
  }
  public function addPermiso($id)
  {
    $permisos_id = $this->request->getFormData()['permisos_id']; 
    $modelRole= new Role();
    return $modelRole->addPermiso([
      'permisos_id' => $permisos_id,
      'roles_id' => $id
    ]);
  }
  public function deletePermiso($id)
  {
    $permisos_id = $this->request->getFormData()['permisos_id']; 
    $modelRole= new Role();
    return $modelRole->deletePermiso([
      'permisos_id' => $permisos_id,
      'roles_id' => $id
    ]);
  }
}