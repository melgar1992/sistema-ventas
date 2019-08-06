<?php

class Productos extends BaseController
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

        $this->loadView('Productos','/form/admin/productos/list', $data);
    }
    public function guardarProducto()
    {
        $codigo = $this->input->post("codigo");
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $categoria = $this->input->post("categoria");
        $data = array(

            'id_categorias' => $categoria,
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'stock' => $stock,
            'estado' => "1"
        );

        if ($this->Productos_model->guardarProd($data)) {
            redirect(base_url() . "Mantenimiento/productos");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
        }

        
    }
    public function editar($id_producto)
    {
        $data = array(
            'producto' => $this->Productos_model->getProducto($id_producto),
            'categorias' => $this->Categorias_model->getCategorias(),
        );
        $this->loadView('Productos','/form/admin/productos/editar', $data);
    }
    public function actualizarProducto()
    {
        $id_producto = $this->input->post("id_producto");
        $codigo = $this->input->post("codigo");
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $categoria = $this->input->post("categoria");
        $data = array(

            'id_productos' => $id_producto,
            'id_categorias' => $categoria,
            'codigo' => $codigo,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'stock' => $stock,
            'estado' => "1"
        );

        if ($this->Productos_model->actualizar($id_producto,$data)) {
            redirect(base_url() . "Mantenimiento/productos");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
        }
    }
    public function vista($id_producto)
    
    {
        $data = array(
            'producto' => $this->Productos_model->getProducto($id_producto),

        );
        
        $this->load->view("/form/admin/Productos/vista",$data);
    }
    public function borrar($id_producto)
    {
        $data= array(
            'estado'=>"0",
        );

        if ($this->Productos_model->actualizar($id_producto,$data)) {
            redirect(base_url() . "Mantenimiento/productos");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
        }

    }
}
