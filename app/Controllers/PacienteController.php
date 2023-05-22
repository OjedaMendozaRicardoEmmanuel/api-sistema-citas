<?php
namespace app\Controllers;

use app\Models\Paciente;
use bootstrap\Request;

class PacienteController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function getAll()
  {
    $modelPaciente=new Paciente();

    return $modelPaciente->all();
  }
  public function findById($id)
  {
    $modelPaciente=new Paciente();

    return $modelPaciente->find($id);
  }
  public function create()
  {
    $nombre = $this->request->getFormData()['nombre']; 
    $apellidop = $this->request->getFormData()['apellidop']; 
    $apellidom = $this->request->getFormData()['apellidom']; 
    $genero = $this->request->getFormData()['genero'];
    $fecha_nacimiento = $this->request->getFormData()['fecha_nacimiento']; 
    $correo = $this->request->getFormData()['correo']; 
    $telefono = $this->request->getFormData()['telefono']; 
    $estado = $this->request->getFormData()['estado']; 
  
    $modelPaciente = new Paciente();
    return $modelPaciente->create([
      'nombre' => $nombre,
      'apellidop' => $apellidop,
      'apellidom' => $apellidom,
      'genero' => $genero,
      'fecha_nacimiento' => $fecha_nacimiento,
      'correo' => $correo,
      'telefono' => $telefono,
      'estado' => $estado
    ]);
  }  
  public function update($id)
  {
    $nombre = $this->request->getFormData()['nombre']; 
    $apellidop = $this->request->getFormData()['apellidop']; 
    $apellidom = $this->request->getFormData()['apellidom']; 
    $genero = $this->request->getFormData()['genero'];
    $fecha_nacimiento = $this->request->getFormData()['fecha_nacimiento']; 
    $correo = $this->request->getFormData()['correo']; 
    $telefono = $this->request->getFormData()['telefono']; 
    $estado = $this->request->getFormData()['estado'];  
  
    $modelPaciente = new Paciente();
    return $modelPaciente->update($id, [
        'nombre' => $nombre,
        'apellidop' => $apellidop,
        'apellidom' => $apellidom,
        'genero' => $genero,
        'fecha_nacimiento' => $fecha_nacimiento,
        'correo' => $correo,
        'telefono' => $telefono,
        'estado' => $estado
    ]);
  }
  public function delete($id)
  {
    $modelPaciente= new Paciente();
    return $modelPaciente->delete($id);
  }

  public function citas($id)
  {
    $modelPaciente= new Paciente();
    return $modelPaciente->citas($id);
  }
}