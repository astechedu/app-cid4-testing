<?php 

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{    
    public  function __construct()
    {    	
    	echo " Outer Admin Module besides public folder"."<br>";
    }
 
    public function index(){          

        echo "Hi, Public folder sibling";
    
        return view('index');
    }
    public function contact(){          

        return view('contact');
    }
}