<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class christian extends ResourceController {
  
  public function usercris($usuario = '',$password='',$fecha_nacimiento='') {
    return $this->respond([
      "usuario"  => $usuario,
      "password"  => $password,
      "fecha" => date($fecha_nacimiento)
    ]);
}
}