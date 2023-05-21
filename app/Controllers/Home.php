<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome');
    }

	function curd()
	{
		//echo 'Hello Codeigniter 4';

		$crudModel = new CrudModel();

		$data['user_data'] = $crudModel->orderBy('id', 'DESC')->paginate(10);

		$data['pagination_link'] = $crudModel->pager;

		return view('crud_view', $data);
	}
 
}
