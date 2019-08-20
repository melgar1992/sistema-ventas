<?php

class Usuarios extends BaseController
{

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = array(
            'usuarios' => $this->Usuario_model->getUsuarios(),
            'roles' => $this->Usuario_model->getRoles(),
         );   

        $this->loadView('Usuarios', '/form/admin/usuarios/list',$data);
    }
    public function guardarUsuarios()
    {
        
    }
}