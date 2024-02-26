<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password']; // Define the fields that can be inserted or updated

    public function getAllData()
    {
       
        return $this->findAll();
    }
    
    public function getAdmins(){
        return $this->findAll();
    }
    public function createAdmin($data)
    {
        // Validate the data if needed before inserting

        // Insert the data into the 'admin' table
        $this->insert($data);

        // You can return the inserted ID or any other relevant information
        return $this->insertID();
    }
}
