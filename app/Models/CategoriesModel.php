<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{

    protected $table            = 'categories';
    protected $primaryKey       = 'id';
       // allowed fields to manage
    protected $returnType = 'array';
    protected $allowedFields = ['category_name'];
    //protected $allowedFields = ['name', 'price', 'quantity', 'status', 'created', 'description'];
             

    //public function selectAllUsers() {
     
    //$db  = \Config\Database::connect();    

    //}
     

   /*
    protected $DBGroup          = 'default';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
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
*/
}
