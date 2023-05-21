<?php 

namespace App\Controllers;

//use App\Models\CartModel;
use App\Models\CartModel;

class CartController extends BaseController
{    
    public $carts = '' ;

    public  function __construct()
    {       
       //helper('form');
       $this->carts = new ProductModel();

    }
 
    public function index() {       
 
     
      $data = [

          'title' => 'Listing Cart Products',
          'products' => $this->carts->paginate(10),          
      ];
     
      //echo "<pre>";print_r($data['products']);

      return view('cart/index',['data' => $data]);     
      
    }

    public function addToCart() {  
    
      $data = $this->request->getVar();      

      $this->carts->insert($data);

      return redirect()->route('/'); 
    }     
 

     public function save() {


      if ($this->request->isAJAX()) {
          $query = service('request')->getPost('query');
          var_dump($this->request->getPost('query'));
      }
      
      $mess="This is ajax";
      //$data = $this->request->getVar();      

      //$this->carts->insert($data);
      //return redirect()->route('/');
      //return view('index');
       //return redirect()->route('/users/index'); 
       return $this->response->setJSON($mess);
    }


  public function createPro() {

    //helper(['form', 'url']);
         
    $db      = \Config\Database::connect();
        $builder = $db->table('carts');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price')
            ];
 
           $save = $builder->insert($data);
 
       $data = [
        'success' => true,
        //'data' => $save,
        'msg' => "Thanks for contact us. We get back to you"
       ];
 
       return $this->response->setJSON($data);

  }  


 public function test()
 {  

      if ($this->request->isAJAX())
      {
          echo json_encode(['name'=>'ajay']);
      }   
      
  }

}