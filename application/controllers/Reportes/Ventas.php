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
            'ventas' => $this->Ventas_model->getVentas(),
         );

        $this->loadView("ReportesVentas","/form/admin/reportes/Ventas",$data);
        
    }




}