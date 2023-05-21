<?php 

namespace Modules\User\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{    
    public  function __construct()
    {    	
    	echo " User Module in App Folder"."<br>";
    }
 
    public function index(){          

        echo "User Module in App Folder";
        
        return view('index');
    }
}