<?php

class Model_Agent extends CI_Controller{
    
    
  public function GetAllAgents($numeroFormation){
       
       // Attention ici la table formation est inutile dans la requête
      // Il suffit de prendre uniquement les tables agents et inscription
      
      // TA REQUETE
       //$sql = $this->db->query("SELECT prenom,nom FROM agent, inscription, formation WHERE Agent.code = inscription.codeAgent AND formation.code = inscription.numeroFormation AND numeroFormation=".$numeroFormation);
       
      
      // LA MIENNE
      $sql = $this->db->query("SELECT prenom,nom FROM agent, inscription WHERE Agent.code = inscription.codeAgent and numeroFormation='".$numeroFormation."'");
      return $sql->result();
       

   } 
    
}