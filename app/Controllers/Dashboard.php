<?php

namespace App\Controllers;
use App\Models\AdministratorModel;

class Dashboard extends BaseController
{
    public function index()
    {
 
        echo view('admin/templates/header');
        echo view('admin/dashboard');
        echo view('admin/templates/sidebar');
        echo view('admin/templates/footer');
    }
}
