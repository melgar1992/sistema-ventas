<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
}