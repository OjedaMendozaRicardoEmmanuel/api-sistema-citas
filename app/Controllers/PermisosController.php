<?php
namespace app\Controllers;

use app\Models\Permisos;
use bootstrap\Request;

class PermisosController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function roles($id)
  {
    $modelPermisos= new Permisos();
    return $modelPermisos->roles($id);
  }
  public function getAll()
  {
    $modelPermisos= new Permisos();
    return $modelPermisos->all();
  }
  public function findById($id)
  {
    $modelPermisos= new Permisos();
    return $modelPermisos->find($id);
  }
  public function create()
  {
    $nombre = $this->request->getFormData()['nombre']; 
  
    $modelPermisos= new Permisos();
    return $modelPermisos->create([
      'nombre' => $nombre
    ]);
  }  
  public function update($id)
  {
    $nombre = $this->request->getFormData()['nombre'];
  
    $modelPermisos= new Permisos();
    return $modelPermisos->update($id, [
      'nombre' => $nombre
    ]);
  }
  public function delete($id)
  {
    $modelPermisos= new Permisos();
    return $modelPermisos->delete($id);
  }
}