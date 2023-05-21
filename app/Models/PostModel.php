<?php
     
namespace App\Models;
     
use CodeIgniter\Model;
     
class PostModel extends Model
{
   // Table
   protected $table = 'posts';
   protected $primaryKey = 'id';
   // allowed fields to manage
   protected $allowedFields = ['title', '', 'content'];
}   