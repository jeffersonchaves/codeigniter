<?php

namespace App\Models;

use CodeIgniter\Model;

class SellerModel extends Model
{

    protected $table = 'seller';
    protected $primaryKey = 'Id';

    protected $allowedFields = ['Name', 'Email', 'BaseSalary', 'DepartmentId'];

    public function getAll()
    {
        return $this->findAll();
    }

    public function getById(int $id = null)
    {
        return $this->find($id);
    }

    public function saveSeller($seller)
    {

        $result = $this->save($seller);

        if ($result === false) {
            return $this->errors();
        }

        return true;
    }
}
