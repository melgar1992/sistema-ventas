<?php
class Clientes_model extends CI_Model
{

    public function getClientes()
    {
        $this->db->where("estado", "1");
        $resultados = $this->db->get("clientes");
        return $resultados->result();
    }
    public function guardarCli($data)
{
    return $this->db->insert("clientes",$data);
}
}
