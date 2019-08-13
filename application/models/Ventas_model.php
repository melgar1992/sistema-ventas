<?php
class Ventas_model extends CI_Model
{
    public function getComprobantes()
    {
        $resultados=$this->db->get("tipo_comprobante");
        return $resultados->result();
    }
    public function getProductos($valor)
    {
        $this->db->select("id_productos, codigo, nombre as label, precio, stock");
        $this->db->from("productos");
        $this->db->like("nombre",$valor);

        $resultado = $this->db->get();
        return $resultado->result_array();
    }

   
}