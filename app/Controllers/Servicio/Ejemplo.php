<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class Ejemplo extends ResourceController {
    public function bienvenida() {
        return $this->respond("BIENVENIDO A CODEIGNITER 4");
    }
}