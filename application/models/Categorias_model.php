<?php
class Categorias_model extends CI_Model
{

public function getCategorias()
{
    $this->db->where("estado","1");
    $resultados = $this->db->get("categorias");
    return $resultados->result();
}



    
}