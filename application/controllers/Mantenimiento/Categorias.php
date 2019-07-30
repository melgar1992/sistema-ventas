<?php

class Categorias extends BaseController
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'categorias' => $this->Categorias_model->getCategorias(),
        );

        $this->loadView('/form/admin/categorias/list', $data);
    }
    public function guardarCategoria()
    {
        $nombre = $this->input->post("nombre");
        $descripcion = $this->input->post("descripcion");
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'estado' => "1"
        );

        if ($this->Categorias_model->guardarCat($data)) {
            redirect(base_url() . "Mantenimiento/categorias");
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
        $this->loadView('/form/admin/categorias/editar', $data);
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
        
        if ($this->Categoria_model->actualizar($id_categoria, $data)) {
            redirect(base_url() . "Mantenimiento/categorias");
        }
        else{
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url() . "Mantenimiento/categorias/editar".$id_categoria);
        }
    }
}
