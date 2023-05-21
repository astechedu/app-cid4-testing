<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
//use CodeIgniter\API\ResponseTrait;
//use App\Models\PostModel;

class PostController extends ResourceController
{
	//use ResponseTrait;
    protected $modelName = 'App\Models\PostModel';
    protected $format    = 'json';


    public function index(){
      $model = new PostModel();
      //$data['posts'] = $model->orderBy('id', 'DESC')->findAll();
     // return $this->respond($data);
       return $this->respond($this->model->findAll());      
    }
    // ...

}