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

        $this->loadView('','/form/admin/productos/list', $data);
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

        echo $nombre . " " . $descripcion;
    }
    public function editar($id_categorias)
    {
        $data = array(
            'categoria' => $this->Categorias_model->getCategoria($id_categorias),
        );
        $this->loadView('Categorias','/form/admin/categorias/editar', $data);
    }
    public function actualizarCategoria()
    {
        $id_categoria = $this->input->post("id_categorias");
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'estado' => "1"
        );
        
        if ($this->Categorias_model->actualizar($id_categoria, $data)) {
            redirect(base_url() . "Mantenimiento/categorias");
        }
        else{
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url() . "Mantenimiento/categorias/editar".$id_categoria);
        }
    }
    public function vista ($id_categorias)
    
    {
        $data = array(
            'categoria' => $this->Categorias_model->getCategoria($id_categorias),

        );
        
        $this->load->view("/form/admin/categorias/vista",$data);
    }
    public function borrar($id_categorias)
    {
        $data= array(
            'estado'=>"0",

        );
        $this->Categorias_model->actualizar($id_categorias,$data);
        echo "Mantenimiento/Categorias";
    }
}
