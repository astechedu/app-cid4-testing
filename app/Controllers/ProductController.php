<?php 

namespace App\Controllers;

use App\Models\ProductModel;
//use App\Models\CategoriesModel;

class ProductController extends BaseController
{    
    public $products = '' ;

    public  function __construct()
    {     
       //helper('form'); 
       $this->products = new ProductModel();       
    }
 
    public function index() {       
 
     
      $data = [

          'title' => 'Listing Products',
          'products' => $this->products->paginate(10),          
      ];
     

       //$p = $this->products->allProducts();     
       //print_r($p);

       //$builder = $db->table('blogs');

        //$builder->select('*');
        //$builder->join('categories', 'categories.category_id = products.category_id');
        //$query = $builder->get();

      

        //echo "<pre>";print_r($query);
   
      //echo "<pre>";print_r($data['products']);

      return view('shopping/index',['data' => $data]);     
      
    }

    public function create() {
     
      $data['title'] = "Register";

      return view('create', ['data' => $data]);
    }
  



  public function insertData()
  {  
        helper(['form', 'url']);

        $name = $this->request->getVar('name');

        echo json_encode($name);

        exit;
         
    $db      = \Config\Database::connect();
        $builder = $db->table('contacts');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'message'  => $this->request->getVar('message')
            ];
 
           $save = $builder->insert($data);
 
       $data = [
        'success' => true,
        'data' => $save,
        'msg' => "Thanks for contact us. We get back to you"
       ];
 
       return $this->response->setJSON($data);
    }


//User This function you watn to call ajax request ( check file here: view/shopping/index.php )
//Same alignment 
 public function test()
 {  

      if ($this->request->isAJAX())
      {
          echo json_encode(['name'=>'ajay']);
      }   
      
  }


 public function ajay($id=null,$price=null)
 {  

      if ($this->request->isAJAX())
      {         
          $data['id'] = $this->request->getVar('id');
          $data['price'] = $this->request->getVar('price');
          echo json_encode($data);
      }   
      
  }

//OR widthout isAjax()

/*
 public function ajay($id=null,$price=null)
 {  

    $data['id'] = $this->request->getVar('id');
    $data['price'] = $this->request->getVar('price');
    echo json_encode($data);       
      
  } 
*/


}