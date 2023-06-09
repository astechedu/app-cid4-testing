<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
   $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'auto_increment' => TRUE,
                ],
                'user_id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                ],
                'cat_id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                ],
                'name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 350,
                ],
                'price' => [
                    'type' => 'INT',
                    'constraint' => 11,
                ],
                'qty' => [
                    'type' => 'INT',
                    'constraint' => 11,
                ],
                'discription' => [
                    'type' => 'VARCHAR',
                    'constraint' => 350,
                ],
                'image' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                ],
                'created_at datetime default current_timestamp',
            ]
        );
        $this->forge->addForeignKey('id','users','user_id','NULL','NULL');
        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropForeignKey('users','user_id');
        $this->forge->dropTable('products');

    }
}
