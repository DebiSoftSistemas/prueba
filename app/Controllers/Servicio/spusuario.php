<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class spusuario extends ResourceController {
    public function usuario($usuario = '',$password='',$fecha_nacimiento='') {
        return $this->respond([
            "usuario" => $usuario,
            "password" => $password,
            "fecha nacimiento" => date($fecha_nacimiento)
        ]);
    }
}