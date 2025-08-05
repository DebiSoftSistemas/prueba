<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class Ejemplo extends ResourceController {
    protected $model;

    public function __construct(){
        // $this->model = new \App\Models\Servicio\EjemploModel();
    }

    public function bienvenida() {
        return $this->respond("BIENVENIDO A CODEIGNITER 4");
    }
}