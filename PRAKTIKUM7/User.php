<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $field = 
        [
            "id" => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => TRUE,
                'unsigned' => true
            ],
            'usernama' => [
                'type' => "VARCHAR",
                'constraint' => 50
                
            ],
            'email' => [
                'type' => "VARCHAR",
                'constraint' => 50
            ],
            'passsword' => [
                'type' => 'TEXT'
            ]
        ];

        $this->forge->addField($field);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user', true);
    }
    

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}
