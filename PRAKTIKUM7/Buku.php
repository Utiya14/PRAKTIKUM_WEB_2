<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use Config\Database;

class Buku extends Migration
{
    public function up()
    {
        $forge = Database::forge(); // Menambahkan deklarasi $forge

        $field = [
            "id" => [
                'type' => 'bigint',
                'constraint' => 5,
                'auto_increment' => TRUE,
                'unsigned' => true
            ],
            'judul' => [
                'type' => "VARCHAR",
                'constraint' => 50
            ],
            'penulis' => [
                'type' => "VARCHAR",
                'constraint' => 50
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'tahun_terbit' => [
                'type' => 'year'
            ]
        ];

        $forge->addField($field); // Menggunakan $forge->addField
        $forge->addKey('id', true); // Menggunakan $forge->addKey
        $forge->createTable('buku'); // Menggunakan $forge->createTable
    }

    public function down()
    {
        $forge = Database::forge(); // Menambahkan deklarasi $forge

        $forge->dropTable('buku', true); // Menggunakan $forge->dropTable
    }
}
