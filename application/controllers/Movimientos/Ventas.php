<?php

class Ventas extends BaseController
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'productos' => $this->Productos_model->getProductos(),
            'categorias' => $this->Categorias_model->getCategorias(),
        );

        $this->loadView('Ventas', '/form/admin/ventas/list', $data);
    }
}