<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_usuario';
    protected $allowedFields    = ['us_nombre', 'us_apellido_p', 'us_apellido_m'];

    public function get($id = NULL){
        if($id === NULL){
            return $this->findAll();
        }
        return $this->asArray()
                    ->where(['id_usuario' => $id])
                    ->first();
    }
    
    
}
