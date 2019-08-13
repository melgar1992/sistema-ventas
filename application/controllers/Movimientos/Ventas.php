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
        "tipocomprobantes"=>$this->Ventas_model->getComprobantes(),
        "clientes"=> $this->Clientes_model->getClientes(),
      );
        $this->loadView('Ventas', '/form/admin/ventas/add',$data);
        
    }
    public function getProductos()
    {
        $valor = $this->input->post("valor");
        $productos = $this->Ventas_model->getProductos($valor);
        echo json_encode($productos);

    }
    

}