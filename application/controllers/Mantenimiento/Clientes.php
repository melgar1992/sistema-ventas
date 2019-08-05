<?php

class CLientes extends BaseController
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'clientes' => $this->Clientes_model->getClientes(),
        );

        $this->loadView('Clientes','/form/admin/clientes/list', $data);
    }
    public function guardarClientes()
    {
        $nombre = $this->input->post("nombres");
        $apellido = $this->input->post("apellidos");
        $telefono = $this->input->post("telefono");
        $direccion = $this->input->post("direccion");
        $nit = $this->input->post("nit");
        $empresa = $this->input->post("empresa");

        $data = array(
            'nombres' => $nombre,
            'apellidos' => $apellido,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'nit' => $nit,
            'empresa' => $empresa,
            'estado' => "1"
        );

       if ($this->Clientes_model->guardarCli($data)) {
            redirect(base_url() . "Mantenimiento/clientes");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
        }

        

    
    }
}