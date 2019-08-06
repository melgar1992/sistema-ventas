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
        return $this->db->insert("clientes", $data);
    }
    public function getCliente($id_clientes)
    {
        $this->db->where("id_clientes", $id_clientes);
        $resultado = $this->db->get("clientes");
        return $resultado->row();
    }
    public function actualizar($id_clientes,$data)
{
    $this->db->where("id_clientes",$id_clientes);
   return $this->db->update("clientes",$data);
    
}
}
