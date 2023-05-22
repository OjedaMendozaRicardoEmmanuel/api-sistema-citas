<?php
namespace app\Controllers;

use app\Models\Especialidad;
use bootstrap\Request;

class EspecialidadController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function doctor($id)
  {
    $modelEspecialidad= new Especialidad();
    return $modelEspecialidad->doctor($id);
  }
  public function getAll()
  {
    $modelEspecialidad= new Especialidad();
    return $modelEspecialidad->all();
  }
  public function findById($id)
  {
    $modelEspecialidad= new Especialidad();
    return $modelEspecialidad->find($id);
  }
  public function create()
  {
    $nombre = $this->request->getFormData()['nombre']; 
  
    $modelEspecialidad= new Especialidad();
    return $modelEspecialidad->create([
      'nombre' => $nombre
    ]);
  }  
  public function update($id)
  {
    $nombre = $this->request->getFormData()['nombre'];
  
    $modelEspecialidad= new Especialidad();
    return $modelEspecialidad->update($id, [
      'nombre' => $nombre
    ]);
  }
  public function delete($id)
  {
    $modelEspecialidad= new Especialidad();
    return $modelEspecialidad->delete($id);
  }
}