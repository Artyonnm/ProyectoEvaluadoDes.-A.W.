<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        echo view('templates/header_admin');
        //echo view('templates/navbar');
        echo view('admin');
        echo view('templates/footer_admin');
    }
}
