<?php
class CtrlSncf extends CI_Controller{
 public function index(){
     
    $data['activite'] = "Les Activités";
    $this->load->model("Model_Activite");
    $data['lesActivites'] = $this->Model_Activite->GetAllActivite();
    $this->load->view("v_sncf", $data);
     
     
 }   
  public function AfficherLesFormations()
    {
       // $laCateg = $_GET['rbCateg'];
        $laActivite = $this->uri->segment(3);
        $this->load->model("Model_Formation");
        
        //Appel de la méthode
        $data['lesFormations'] = $this->Model_Formation->GetAllFormations($laActivite);
        
        //Appel de la vue 
        $this->load->view("v_formation", $data);
        
    }
    public function AfficherLesAgents()
    {
        $LeAgent = $this->uri->segment(4);
        $this->load->Model("Model_Agent");
        //Appel de la méthode
        
        $data['lesAgents'] = $this->Model_Agent->GetAllAgents($LeAgent);
        
        //Appel de la vue
        $this->load->view(v_agent,$data);
    }
    
    
    
    
}
