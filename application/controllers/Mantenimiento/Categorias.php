<?php

class Categorias extends BaseController {
    
    function __construct(){
		parent::__construct();			
    }    

public function index()
{
    $data =array(
        'categorias' => $this->Categorias_model->getCategorias(),
    );
    
    $this->loadView('Categorias','/form/admin/categorias/list',$data);
    
}
public function guardarCategoria()
{
    $nombre = $this->input->post("nombres");
    $descripcion = $this->input->post("descripcion");

    $respuesta = array(
        'nombre' => $nombre,
        'descripcion' => $descripcion
    );
    echo json_encode($respuesta);
}
}