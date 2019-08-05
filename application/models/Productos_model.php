<?php
class Productos_model extends CI_Model
{

public function getProductos()
{
    $this->db->select("p.*, c.nombre as categoria");
    $this->db->from("productos p");
    $this->db->join("categorias c","p.id_categorias = c.id_categorias");
    $this->db->where("p.estado","1");
    $resultados = $this->db->get();
    return $resultados->result();
}

public function guardarProd($data)
{
    return $this->db->insert("productos",$data);
}
public function getCategoria($id_categorias)
{
   $this->db->where("id_categorias",$id_categorias);
   $resultado = $this->db->get("categorias");
   return $resultado->row();
        
}
public function actualizar($id_categoria,$data)
{
    $this->db->where("id_categorias",$id_categoria);
   return $this->db->update("categorias",$data);
    
}



    
}