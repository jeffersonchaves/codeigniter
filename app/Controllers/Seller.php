<?php


namespace App\Controllers;

use App\Models\SellerModel;
use CodeIgniter\Controller;

class Seller extends Controller
{

    public function index()
    {
        $model = new SellerModel();

        $data = [
            'title' => 'Sellers Page',
            'sellers' => $model->getAll()
        ];

        print view('templates/header', $data);
        print view('pages/sellers', $data);
        print view('templates/footer', $data);
    }

    public function detalhes($id)
    {
        $model = new SellerModel();

        $seller = $model->getById($id);

        $data = [
            'title' => 'Details Page: ' . $seller['Name'],
            'seller' =>  $seller
        ];

        print view('templates/header', $data);
        print view('pages/detalhes', $data);
        print view('templates/footer', $data);
    }

    public function create($seller = null)
    {
        helper('form');

        $data = ['title' => 'Cadastrar Page'];

        print view('templates/header', $data);
        print view('pages/cadastrar', $seller);
        print view('templates/footer');
    }

    public function save()
    {
        helper('form');
        $model = new SellerModel();

        $seller = [
            'Name' => $this->request->getVar('Name'),
            'Email' => $this->request->getVar('Email'),
            'BaseSalary' => $this->request->getVar('BaseSalary'),
            'DepartmentId' => 1
        ];

        $rules    = [
            'Name'  => 'required|alpha_numeric_space|min_length[3]',
            'Email' => 'required|valid_email|is_unique[seller.Email]',
        ];

        if ($this->validate($rules)) {
            $model->saveSeller($seller);
            $this->index();
        } else {
            $this->create($seller);
        }
    }
}
