<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class Ejemplo extends ResourceController {
    public function bienvenida() {
        return $this->respond("BIENVENIDO A CODEIGNITER 4");
    }

    public function jsonBienvenida() {
        return $this->respond([
            "fecha" => date('Y-m-d H:i:s'),
            "mensaje" => "Bienvenido a CODEIGNITER 4"
        ]);
    }

    public function jsonTexto($i_texto) {
        return $this->respond([
            "fecha" => date('Y-m-d H:i:s'),
            "mensaje" => "Bienvenido a CODEIGNITER 4",
            "texto" => $i_texto
        ]);
    }
}