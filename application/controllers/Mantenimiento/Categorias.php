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
    
    $this->loadView('/form/admin/categorias/list',$data);
    
}
public function guardarCategoria()
{
    $nombre = $this->input->post("nombre");
    $descripcion = $this->input->post("descripcion");

    echo $nombre. " ".$descripcion;
}
}