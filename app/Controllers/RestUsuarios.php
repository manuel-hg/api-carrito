<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class RestUsuarios extends ResourceController
{
    protected $modelName = 'App\Models\UsuariosModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->get());
    }
    // ...
}