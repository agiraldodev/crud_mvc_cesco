<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;
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

    public function guardarProducto() {
        $productoModel = new ProductoModel();

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock'),
        ];

        $productoModel->insert($datos);
    }
}
