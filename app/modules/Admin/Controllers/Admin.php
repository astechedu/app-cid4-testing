<?php 

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{    
    public  function __construct()
    {    	
    	echo "  Admin Module in App Folder"."<br>";
    }
 
    public function index() {    

        echo "Admin index in App Folder";   

        //$data['title'] = "Admin Listing";

        return view('ajay');
    }

    public function contact() {          

        return view('contact');
    }


}