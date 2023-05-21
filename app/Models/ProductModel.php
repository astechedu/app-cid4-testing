<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{

    protected $table            = 'products';
    protected $primaryKey       = 'id';
       // allowed fields to manage
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'desc', 'price','rrp', 'quantity','img'];
    //protected $allowedFields = ['name', 'price', 'quantity', 'status', 'created', 'description'];
             

    public function allProducts() {
     
        $db      = \Config\Database::connect();
        $builder = $db->table('products');

        $products = array();

        $query = $builder->get();

        foreach ($query->getResult() as $row) {

           $products[] = $row;
        }

        return $products;
    }


     

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
