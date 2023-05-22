<?php
namespace app\Controllers;

use app\Models\Cita;
use bootstrap\Request;

class CitaController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function users($id)
  {
    $modelCita= new Cita();
    return $modelCita->users($id);
  }
  public function paciente($id)
  {
    $modelCita= new Cita();
    return $modelCita->paciente($id);
  }
  public function doctor($id)
  {
    $modelCita= new Cita();
    return $modelCita->doctor($id);
  }
  public function getAll()
  {
    $modelCita= new Cita();
    return $modelCita->all();
  }
  public function findById($id)
  {
    $modelCita= new Cita();
    return $modelCita->find($id);
  }
  public function create()
  {
    $fecha_hora = $this->request->getFormData()['fecha_hora']; 
    $estatus = $this->request->getFormData()['estatus'];  
    $paciente_id = $this->request->getFormData()['paciente_id'];  
    $doctor_id = $this->request->getFormData()['doctor_id'];  
    $usuarios_id = $this->request->getFormData()['usuarios_id']; 
  
    $modelCita= new Cita();
    return $modelCita->create([
      'fecha_hora' => $fecha_hora,
      'estatus' => $estatus,
      'paciente_id' => $paciente_id,
      'doctor_id' => $doctor_id,
      'usuarios_id' => $usuarios_id
    ]);
  }  
  public function update($id)
  {
    $fecha_hora = $this->request->getFormData()['fecha_hora']; 
    $estatus = $this->request->getFormData()['estatus'];  
    $paciente_id = $this->request->getFormData()['paciente_id'];  
    $doctor_id = $this->request->getFormData()['doctor_id'];  
    $usuarios_id = $this->request->getFormData()['usuarios_id']; 
  
    $modelCita= new Cita();
    return $modelCita->update($id, [
        'fecha_hora' => $fecha_hora,
        'estatus' => $estatus,
        'paciente_id' => $paciente_id,
        'doctor_id' => $doctor_id,
        'usuarios_id' => $usuarios_id
    ]);
  }
  public function delete($id)
  {
    $modelCita= new Cita();
    return $modelCita->delete($id);
  }
}