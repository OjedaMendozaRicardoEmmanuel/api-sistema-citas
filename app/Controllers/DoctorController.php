<?php
namespace app\Controllers;

use app\Models\Doctor;
use bootstrap\Request;

class DoctorController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function getAll()
  {
    $modelDoctor=new Doctor();

    return $modelDoctor->all();
  }
  public function findById($id)
  {
    $modelDoctor=new Doctor();

    return $modelDoctor->find($id);
  }
  public function create()
  {
    $cedula = $this->request->getFormData()['cedula'];
    $usuarios_id = $this->request->getFormData()['usuarios_id'];
  
    $modelDoctor = new Doctor();
    return $modelDoctor->create([
      'cedula' => $cedula,
      'usuarios_id' => $usuarios_id
    ]);
  }  
  public function update($id)
  {
    $cedula = $this->request->getFormData()['cedula'];
    $usuarios_id = $this->request->getFormData()['usuarios_id'];
  
    $modelDoctor = new Doctor();
    return $modelDoctor->update($id, [
        'cedula' => $cedula,
        'usuarios_id' => $usuarios_id
    ]);
  }
  public function delete($id)
  {
    $modelDoctor= new Doctor();
    return $modelDoctor->delete($id);
  }
  public function user($id)
  {
    $modelDoctor= new Doctor();
    return $modelDoctor->user($id);
  }
  public function especialidad($id)
  {
    $modelDoctor= new Doctor();
    return $modelDoctor->especialidad($id);
  }
  public function addEspecialidad($id)
  {
    $especialidad_id = $this->request->getFormData()['especialidad_id']; 
    $modelDoctor= new Doctor();
    return $modelDoctor->addEspecialidad([
      'doctor_id' => $id,
      'especialidad_id' => $especialidad_id
    ]);
  }
  public function deleteEspecialidad($id)
  {
    $especialidad_id = $this->request->getFormData()['especialidad_id']; 
    $modelDoctor= new Doctor();
    return $modelDoctor->deleteEspecialidad([
      'doctor_id' => $id,
      'especialidad_id' => $especialidad_id
    ]);
  }
}