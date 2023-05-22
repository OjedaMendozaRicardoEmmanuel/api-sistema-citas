<?php
namespace app\Controllers;

use app\Models\User;
use bootstrap\Request;

class UserController{
  public $request;
  public function __construct()
  {
    $this->request= new Request();
  }
  public function getAll()
  {
    $modelUser=new User();

    return $modelUser->all();
  }
  public function findById($id)
  {
    $modelUser=new User();

    return $modelUser->find($id);
  }
  public function create()
  {
    $nombre = $this->request->getFormData()['nombre']; 
    $apellidop = $this->request->getFormData()['apellidop']; 
    $apellidom = $this->request->getFormData()['apellidom']; 
    $email = $this->request->getFormData()['email']; 
    $genero = $this->request->getFormData()['genero']; 
    $password = $this->request->getFormData()['password']; 
    $estado = $this->request->getFormData()['estado']; 
  
    $modelUser = new User();
    return $modelUser->create([
      'nombre' => $nombre,
      'apellidop' => $apellidop,
      'apellidom' => $apellidom,
      'email' => $email,
      'genero' => $genero,
      'password' => $password,
      'estado' => $estado
    ]);
  }  
  public function update($id)
  {
    $nombre = $this->request->getFormData()['nombre']; 
    $apellidop = $this->request->getFormData()['apellidop']; 
    $apellidom = $this->request->getFormData()['apellidom']; 
    $email = $this->request->getFormData()['email']; 
    $genero = $this->request->getFormData()['genero']; 
    $password = $this->request->getFormData()['password']; 
    $estado = $this->request->getFormData()['estado']; 
  
    $modelUser = new User();
    return $modelUser->update($id, [
      'nombre' => $nombre,
      'apellidop' => $apellidop,
      'apellidom' => $apellidom,
      'email' => $email,
      'genero' => $genero,
      'password' => $password,
      'estado' => $estado
    ]);
  }
  public function delete($id)
  {
    $modelUser= new User();
    return $modelUser->delete($id);
  }
  public function cars($id)
  {
    $modelUser= new User();
    return $modelUser->cars($id);
  }
  public function roles($id)
  {
    $modelUser= new User();
    return $modelUser->roles($id);
  }
  public function addRol($id)
  {
    $roles_id = $this->request->getFormData()['roles_id']; 
    $modelUser= new User();
    return $modelUser->addRol([
      'roles_id' => $roles_id,
      'usuarios_id' => $id
    ]);
  }
  public function deleteRol($id)
  {
    $roles_id = $this->request->getFormData()['roles_id']; 
    $modelUser= new User();
    return $modelUser->deleteRol([
      'roles_id' => $roles_id,
      'usuarios_id' => $id
    ]);
  }
}