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
    public function editar($id_clientes)
    {
        $data = array(
            'cliente' => $this->Clientes_model->getCliente($id_clientes),
        );
        $this->loadView('Clientes','/form/admin/clientes/editar', $data);
    }
    public function actualizarCliente()
    {
        $id_clientes = $this->input->post("id_clientes");
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
        
        if ($this->Clientes_model->actualizar($id_clientes, $data)) {
            redirect(base_url() . "Mantenimiento/clientes");
        }
        else{
            $this->session->set_flashdata("error", "No se pudo actualizar la informacion");
            redirect(base_url() . "Mantenimiento/clientes/editar".$id_clientes);
        }
    }
    public function vista ($id_clientes)
    
    {
        $data = array(
            'cliente' => $this->Clientes_model->getCliente($id_clientes),

        );
        
        $this->load->view("/form/admin/clientes/vista",$data);
    }
    public function borrar($id_clientes)
    {
        $data= array(
            'estado'=>"0",

        );
        $this->Clientes_model->actualizar($id_clientes,$data);
        echo "Mantenimiento/Clientes";
    }
}