<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class Ejemplo extends ResourceController{
    protected $model;

    public function __construct(){
        // $this->model = new \App\Models\Servicio\EjemploModel();
    }

    public function bienvenida() {
        return $this->genericResponse("BIENVENIDO A CODEIGNITER 4");
    }

    private function genericResponse($data){
        $this->response->setHeader('Access-Control-Allow-Origin', '*');
        $this->response->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        return $this->respond($data);
    }
}