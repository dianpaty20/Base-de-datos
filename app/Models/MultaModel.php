<?php

namespace App\Models;

use CodeIgniter\Model;

namespace App\Models;

use CodeIgniter\Model;

class AdoptadorModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'multa'; 
    protected $primaryKey       = 'id'; 
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['nombreCliente','titulo', 'tipo', 'fechaSalida', 'fechaEntrega', 'diasRetraso', 'pagoMulta']; 

    // Dates
    protected $useTimestamps = false; // Puedes habilitar los timestamps si es necesario
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        // Define reglas de validación si es necesario
    ];
    protected $validationMessages   = [
        // Define mensajes de validación si es necesario
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}