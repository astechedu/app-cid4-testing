<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{

    public  function __construct()
    {     
       //helper('form'); 
      // $this->products = new ProductModel();
    }

	function index()
	{
		//echo 'Hello Codeigniter 4';

		$crudModel = new CrudModel();
		$data['user_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);
		$data['pagination_link'] = $crudModel->pager;
		return view('crud_view', $data);
	}


 public function test()
 {  
 	  

      if ($this->request->isAJAX())
      {
          echo json_encode(['name'=>'ajay']);
      }   
      
  }
}
?>