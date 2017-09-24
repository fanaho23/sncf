<?php

Class Model_Formation extends CI_Controller
{
   public function GetAllFormations($numero)
           {
       $sql = $this->db->query("Select * from formation where numeroActivite=".$numero);
       
       return $sql->result();
           } 
    
}
