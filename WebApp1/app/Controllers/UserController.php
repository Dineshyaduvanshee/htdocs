<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public function createUser()
    {
        $model = new UserModel();

        // Example data, replace with your actual data
        $userData = [
            'username' => 'john_doe',
            'email' => 'john@example.com',
            'password' => 'hashed_password', // Make sure to hash your password before storing it
        ];

        // Insert into the 'users' table
        $model->insert($userData);

        // You can also use other methods like update, delete, find, findAll, etc.

        return "User created successfully!";
    }
}
