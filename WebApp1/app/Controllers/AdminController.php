<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function createAdmin()
    {
        $model = new AdminModel();

        // Example data, replace with your actual data
        $adminData = [
            'username' => 'admin_user',
            'email' => 'admin@example.com',
            'password' => password_hash('admin_password', PASSWORD_BCRYPT), // Hash the password
        ];

        // Insert into the 'admin' table
        $model->insert($adminData);

        // You can also use other methods like update, delete, find, findAll, etc.

        return "Admin created successfully!";
    }

    public function index()
    {
        // Load the model
        $adminModel = new AdminModel();

        // Get data from the model
        $data['admins'] = $adminModel->getAdmins(); // Assuming a method named getAdmins() in your model

        // Load the view and pass data
        return view('admin/index', $data);
    }
}
