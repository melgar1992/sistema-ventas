<?php

class Ventas extends BaseController
{

    function __construct()
    {
    
        parent::__construct();
        $this->load->model("Ventas_model");
    }

    public function index()
    {
        $data = array(
            'clientes' => $this->Clientes_model->getClientes(),
            'tipoclientes'=> $this->Clientes_model->getTipoClientes(),
            'tipodocumentos'=> $this->Clientes_model->getTipoDocumentos(),
        );


        $this->loadView('Ventas', '/form/admin/ventas/list',$data);
    }

    public function add()
    {
      $data=array(
        "tipocomprobantes"=>$this->Ventas_model->getComprobantes()
      );
        $this->loadView('Ventas', '/form/admin/ventas/add',$data);
        
    }
    

}