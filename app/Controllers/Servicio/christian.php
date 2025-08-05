<?php
namespace App\Controllers\Servicio;
use CodeIgniter\RESTful\ResourceController;
class christian extends ResourceController {
  
  public function usuario($i_texto = '') {
    return $this->respond([
      "usuario"  => $i_texto,
      "password"  => $i_texto,
      "fecha" => date('Y-m-d')
    ]);
}
}