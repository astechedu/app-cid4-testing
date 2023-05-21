    <?php
     
    namespace Modules\User\Models;
     
    use CodeIgniter\Model;
     
    class User extends Model
    {
        // Table
        protected $table = 'users';
        protected $primaryKey = 'id';
        // allowed fields to manage
        protected $allowedFields = ['firstname', 'middlename','lastname', 'gender', 'contact', 'email', 'address'];
    }





