<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductoController extends BaseController
{
    public function index()
    {
        //
    }

    public function crear() {
        return view('productos/crear');
    }
}
