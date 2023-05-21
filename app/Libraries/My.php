<?php

namespace App\Libraries;

class My {

	public  function f1() {

	   echo "Hi, this is my first library";
       //return "Hi, this is my first library";		

	}
}


/*
Write the code given below in User Conroller 

<?php 

namespace App\Controllers;

use App\Libraries\My;

class User extends BaseController
{
   
    public function index(){
      
        $lb = new My();
        echo $lb->f1();

        return view('index');
    }
}

*/