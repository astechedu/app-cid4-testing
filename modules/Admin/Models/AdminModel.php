    <?php
     
    namespace Modules\Admin\Models;
     
    use CodeIgniter\Model;
     
    class AdminModel extends Model
    {
        // Table
        protected $table = 'admins';
        protected $primaryKey = 'id';
        // allowed fields to manage
        protected $allowedFields = ['firstname', 'middlename','lastname', 'gender', 'contact', 'email', 'address'];
    }





