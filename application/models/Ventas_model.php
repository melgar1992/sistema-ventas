<?php
class Ventas_model extends CI_Model
{
    public function getComprobantes()
    {
        $resultados=$this->db->get("tipo_comprobante");
        return $resultados->result();
    }
    public function getComprobante($idcomprobante)   
   {
    $this->db->where('id_tipo_comprobante',$idcomprobante);   
    $resultado = $this->db->get('tipo_comprobante');
    return $resultado->row();
   }
    public function getProductos($valor)
    {
        $this->db->select("id_productos, codigo, nombre as label, precio, stock");
        $this->db->from("productos");
        $this->db->like("nombre",$valor);

        $resultado = $this->db->get();
        return $resultado->result_array();
    }

   public function guardarVentas($data )
   {
       return $this->db->insert('ventas',$data);
   }
   public function ultimoID()
   {
       return $this->db->insert_id();
   }
   public function actualizarComprobante($idcomprobante,$data)
   {
       $this->db->where('id_tipo_comprobante', $idcomprobante);
       $this->db->update('tipo_comprobante',$data);
   }
   public function guardar_detalle($data)
   {
       $this->db->insert('detalle_ventas',$data);
   }
   
}