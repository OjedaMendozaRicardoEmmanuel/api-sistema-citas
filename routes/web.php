<?php

use app\Controllers\AuthController;
use app\Controllers\CarController;
use app\Controllers\RoleController;
use app\Controllers\UserController;
use app\Controllers\PermisosController;
use app\Controllers\DoctorController;
use app\Controllers\EspecialidadController;
use app\Controllers\PacienteController;
use app\Controllers\CitaController;
use app\Controllers\ExpedienteController;
use bootstrap\Route;

  //Endpoints Auth
  Route::post('/api/login',[AuthController::class,'login']);
  Route::get('/api/profile',[AuthController::class,'profile']);
  
  //Endpoints Usuarios
  Route::get('/api/users/:id/cars',[UserController::class,'cars']);
  Route::get('/api/users/:id/roles',[UserController::class,'roles']);
  Route::post('/api/users/:id/roles',[UserController::class,'addRol']);
  Route::delete('/api/users/:id/roles',[UserController::class,'deleteRol']);
  Route::get('/api/users/:id',[UserController::class,'findById']);
  Route::get('/api/users',[UserController::class,'getAll']);
  Route::post('/api/users',[UserController::class,'create']);
  Route::put('/api/users/:id',[UserController::class,'update']);
  Route::delete('/api/users/:id',[UserController::class,'delete']);

  //Route::get('/api/cars/:id/user',[CarController::class,'user']);

  //Endpoints Roles
  Route::get('/api/roles/:id/users',[RoleController::class,'users']);
  Route::post('/api/roles/:id/permiso',[RoleController::class,'addPermiso']);
  Route::delete('/api/roles/:id/permiso',[RoleController::class,'deletePermiso']);
  Route::get('/api/roles/:id',[RoleController::class,'findById']);
  Route::get('/api/roles',[RoleController::class,'getAll']);
  Route::post('/api/roles',[RoleController::class,'create']);
  Route::put('/api/roles/:id',[RoleController::class,'update']);
  Route::delete('/api/roles/:id',[RoleController::class,'delete']);

  //Endpoints Permisos
  Route::get('/api/permisos/:id/roles',[PermisosController::class,'roles']);
  Route::get('/api/permisos/:id',[PermisosController::class,'findById']);
  Route::get('/api/permisos',[PermisosController::class,'getAll']);
  Route::post('/api/permisos',[PermisosController::class,'create']);
  Route::put('/api/permisos/:id',[PermisosController::class,'update']);
  Route::delete('/api/permisos/:id',[PermisosController::class,'delete']);

  //Endpoints Doctor
  Route::get('/api/doctor/:id/user',[DoctorController::class,'user']);
  Route::get('/api/doctor/:id/especialidad',[DoctorController::class,'especialidad']);
  Route::post('/api/doctor/:id/especialidad',[DoctorController::class,'addEspecialidad']);
  Route::delete('/api/doctor/:id/especialidad',[DoctorController::class,'deleteEspecialidad']);
  Route::get('/api/doctor/:id',[DoctorController::class,'findById']);
  Route::get('/api/doctor',[DoctorController::class,'getAll']);
  Route::post('/api/doctor',[DoctorController::class,'create']);
  Route::put('/api/doctor/:id',[DoctorController::class,'update']);
  Route::delete('/api/doctor/:id',[DoctorController::class,'delete']);

  //Endpoints Especialidad
  Route::get('/api/especialidad/:id/doctor',[EspecialidadController::class,'doctor']);
  Route::get('/api/especialidad/:id',[EspecialidadController::class,'findById']);
  Route::get('/api/especialidad',[EspecialidadController::class,'getAll']);
  Route::post('/api/especialidad',[EspecialidadController::class,'create']);
  Route::put('/api/especialidad/:id',[EspecialidadController::class,'update']);
  Route::delete('/api/especialidad/:id',[EspecialidadController::class,'delete']);

  //Endpoints Paciente
  Route::get('/api/paciente/:id/cita',[PacienteController::class,'citas']);
  Route::get('/api/paciente/:id',[PacienteController::class,'findById']);
  Route::get('/api/paciente',[PacienteController::class,'getAll']);
  Route::post('/api/paciente',[PacienteController::class,'create']);
  Route::put('/api/paciente/:id',[PacienteController::class,'update']);
  Route::delete('/api/paciente/:id',[PacienteController::class,'delete']);

  //Endpoints Cita
  Route::get('/api/cita/:id/paciente',[CitaController::class,'paciente']);
  Route::get('/api/cita/:id/doctor',[CitaController::class,'doctor']);
  Route::get('/api/cita/:id/usuario',[CitaController::class,'users']);
  Route::get('/api/cita/:id',[CitaController::class,'findById']);
  Route::get('/api/cita',[CitaController::class,'getAll']);
  Route::post('/api/cita',[CitaController::class,'create']);
  Route::put('/api/cita/:id',[CitaController::class,'update']);
  Route::delete('/api/cita/:id',[CitaController::class,'delete']);

  //Endpoints Expediente
  Route::get('/api/expediente/:id/cita',[ExpedienteController::class,'cita']);
  Route::get('/api/expediente/:id',[ExpedienteController::class,'findById']);
  Route::get('/api/expediente',[ExpedienteController::class,'getAll']);
  Route::post('/api/expediente',[ExpedienteController::class,'create']);
  Route::put('/api/expediente/:id',[ExpedienteController::class,'update']);
  Route::delete('/api/expediente/:id',[ExpedienteController::class,'delete']);

  Route::dispatch();