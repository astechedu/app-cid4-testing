<?php 

namespace Modules\User\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{    
    public  function __construct()
    {    	
    	echo " Outer User Module"."<br>";
    }
 
    public function index(){          

        echo "Outer User sibling of public Admin outer";
        return view('index');
    }

}