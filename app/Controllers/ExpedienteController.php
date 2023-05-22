<?php
namespace app\Controllers;

use app\Models\Expediente;
use bootstrap\Request;

class ExpedienteController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function cita($id)
  {
    $modelExpediente= new Expediente();
    return $modelExpediente->cita($id);
  }
  public function getAll()
  {
    $modelExpediente= new Expediente();
    return $modelExpediente->all();
  }
  public function findById($id)
  {
    $modelExpediente= new Expediente();
    return $modelExpediente->find($id);
  }
  public function create()
  {
    $motivo = $this->request->getFormData()['motivo']; 
    $tratamiento = $this->request->getFormData()['tratamiento'];  
    $precio = $this->request->getFormData()['precio'];  
    $estatus = $this->request->getFormData()['estatus'];  
    $cita_id = $this->request->getFormData()['cita_id']; 
  
    $modelExpediente= new Expediente();
    return $modelExpediente->create([
      'motivo' => $motivo,
      'tratamiento' => $tratamiento,
      'precio' => $precio,
      'estatus' => $estatus,
      'cita_id' => $cita_id
    ]);
  }  
  public function update($id)
  {
    $motivo = $this->request->getFormData()['motivo']; 
    $tratamiento = $this->request->getFormData()['tratamiento'];  
    $precio = $this->request->getFormData()['precio'];  
    $estatus = $this->request->getFormData()['estatus'];  
    $cita_id = $this->request->getFormData()['cita_id']; 
  
    $modelExpediente= new Expediente();
    return $modelExpediente->update($id, [
        'motivo' => $motivo,
        'tratamiento' => $tratamiento,
        'precio' => $precio,
        'estatus' => $estatus,
        'cita_id' => $cita_id
    ]);
  }
  public function delete($id)
  {
    $modelExpediente= new Expediente();
    return $modelExpediente->delete($id);
  }
}