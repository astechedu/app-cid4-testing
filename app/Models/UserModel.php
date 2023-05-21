<?php
     
namespace App\Models;
     
use CodeIgniter\Model;
     
class UserModel extends Model
{
   // Table
   protected $table = 'users';
   protected $primaryKey = 'id';
   // allowed fields to manage
   protected $allowedFields = ['name', 'email', 'phone'];
}