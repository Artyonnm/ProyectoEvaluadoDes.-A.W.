<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('templates/navbar');
        echo view('contacto/inicio');
        echo view('templates/footer');
    }
}
