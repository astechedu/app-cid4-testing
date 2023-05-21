<?php 

namespace App\Controllers;

//use Modules\User\Controllers\User;
//use App\Models\User;
use App\Models\UserModel;

use App\Libraries\My;

class User extends BaseController
{    
    public $users = '' ;

    public  function __construct()
    {      
      
    	//helper('form');      // loading helper
      //helper('hfuns');
      //fun3();
      //echo fun1(3);
      //$mylib = new My();
      //echo $mylib->f1();
      //$mylib->f1();

    	//echo "Constructor"."<br>";       

       $this->users = new UserModel();
    }
 
    public function index(){         
     //Crud
     //https://phpforever.com/codeigniterexample/codeigniter-4-crud-example/
     //https://makitweb.com/crud-create-read-update-delete-in-a-codeigniter-4/    
            
    //Pagination

      $data = [

          'title' => 'Listing Data',
          'users' => $this->users->paginate(20),
          'pager' => $this->users->pager,
      ];


      ## Fetch all records
      //$data['title'] = "Listing Data";
      //$data['users'] = $this->users->findAll();      

     //print_r($data);
      return view('index',['data' => $data]);     
      
    }

    public function create() {
     
      $data['title'] = "Register";

      return view('create', ['data' => $data]);
    }


    public function save() {

/*
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
*/

     //Or
      $data = $this->request->getVar();      

      $this->users->insert($data);
      return redirect()->route('/');
      //return view('index');
    }

/*
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    } 
*/

   public function view($id=null) {       
     $data['title'] = "View";
     $data['users'] = $this->users->find($id);
     return view('view',['data' => $data]); 
   }


   public function edit($id=null) {         
     $data['title'] = "Edit";     
     //$data['id'] = $id;
     $data['users'] = $this->users->find($id);
     return view('edit',['data' => $data]); 
   }


   public function update($id=null) {     
     //$data['title'] = "Edit";
      $data = $this->request->getVar();
      $this->users->update($id, $data);
      return redirect()->route('/');      
   }


   public function delete($id=null) {
    echo "Delete".$id;
    exit;
   }


//User This function you watn to call ajax request ( check file here: view/index.php )
 public function test()
 {  

      if ($this->request->isAJAX())
      {
          echo json_encode(['name'=>'ajay']);
      }   
      
  }

 }  