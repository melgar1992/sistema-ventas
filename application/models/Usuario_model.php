<?php
class Usuario_model extends CI_Model
{

public function login($username, $password)
{
    $this->db->where("username",$username);
    $this->db->where("password",$password);

    $resultado = $this->db->get("usuarios");

    if ($resultado->num_rows()>0) {
        return  $resultado->row();
    }
    else {
        return false;
    }
    
}


    
}