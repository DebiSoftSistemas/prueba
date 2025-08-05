<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class Ejemplo extends ResourceController {
    public function bienvenida() {
        return $this->respond("BIENVENIDO A CODEIGNITER 4");
    }

    public function jsonBienvenida() {
        return $this->respond([
            "fecha" => new Date(),
            "mensaje" => "Bienvenido a CODEIGNITER 4"
        ]);
    }
}