<?php

class Model_Agent extends CI_Controller{
    
    
  public function GetAllAgent($numeroFormation){
       
       
       $sql = $this->db->query("SELECT prenom,nom FROM agent, inscription, formation WHERE Agent.code = inscription.codeAgent AND formation.code = inscription.numeroFormation AND numeroFormation=".$numeroFormation);
       return $sql->result();
       
       
       
   } 
    
}