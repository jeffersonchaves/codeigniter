<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Post extends Controller
{

    public function index()
    {
        print view('welcome_message');
    }

    public function showMe($page = 'home')
    {
        $data['title'] = ucfirst($page);
        $data['posts'] = ['a', 'b', 'c'];

        print view('templates/header', $data);
        print view('pages/' . $page, $data);
        print view('templates/footer', $data);
    }
}
