<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();
        $model->insert([
            "username" => "utiya",
            "email" => "user@mail.com",
            "password" => password_hash("123", PASSWORD_DEFAULT)
        ]);
    }
}
