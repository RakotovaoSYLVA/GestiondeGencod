<?php 

class mode extends CI_Model{

    public function __construct(){

        parent::__construct();

    }
    // article
    public function art(){
        $query =$this->db->query('SELECT * FROM article2');
        return $query->result_array();
    }
    
    public function select_article()
    {
        $query =$this->db->query('SELECT * FROM dossier');
        return $query->result_array();
    }
    public function select_ano()
    {
        $query =$this->db->query('SELECT * FROM temp');
        return $query->result_array();
    }

    public function select_detail($id){
        $this->db->where('id_art',$id);
        $query =$this->db->query('SELECT * FROM article2 where article2.id_art =' . $id);
        return $query->result_array();
    }

    public function countoo1(){
        $query = $this->db->query('SELECT * FROM `article2` WHERE article2.rayon = 001');
        return $query->result_array();
    }

    public function getart($saisi){
        //var_dump($saisi);die;
        $query = $this->db->query("SELECT * FROM `dossier` WHERE ean like '%$saisi%' OR libelle like '%$saisi%'");
        
        return $query->result_array();
    }



    public function artiajout($formArray){
        $this->db->insert('article',$formArray);
        return $id = $this->db->insert_id();
    }

    //ean

    public function selete_dossier()
    {
        $query =$this->db->query('SELECT * FROM dossier');
        return $query->result_array();
    }
    
    public function getlibelledossier($saisilibelle)
    {
        $query =$this->db->query("SELECT * FROM dossier where libelle like '%$saisilibelle%'");
        return $query->result_array();
    }

    public function getlibelleart($saisilibelle)
    {
        $query =$this->db->query("SELECT * FROM article2 where libelle_art like '%$saisilibelle%'");
        return $query->result_array();
    }


    public function getgencodedossier($saisigencode)
    {
       
        $query =$this->db->query("SELECT * FROM dossier where ean = $saisigencode");
        return $query->result_array();
      
       
    }
    public function select_ann()
    {
        $query =$this->db->query('SELECT * FROM anomali');
        return $query->result_array();
    }

    
    public function select_data()
    {
        $query =$this->db->query('SELECT * FROM ean5');
        return $query->result_array();
    }

    public function getean($saisi){
        $query = $this->db->query("SELECT * FROM `ean5` WHERE ean_ean like '%$saisi%'");
        
        return $query->result_array();
    }

    //secteur
    public function select_secteur()
    {
        $query =$this->db->query('SELECT * FROM secteur');
        return $query->result_array();
    }

    public function libelle(){
        $query = $this->db->query('SELECT * FROM `secteur` ');
        return $query->result_array();
    }

    public function sect(){
        $query = $this->db->query('SELECT sect_sect FROM secteur');
        return $query->result_array();
    }

    public function ajoutsect($formArray){
        $this->db->insert('secteur',$formArray);
        return $id = $this->db->insert_id();
    }



    //rayon
    public function select_rayon()
    {
        $result = $this->db->order_by('ray_ray','ASC')
                            ->get('rayon');
        return $result->result_array();
    }
    public function select_ray(){
        $query = $this->db->query('SELECT * from rayon');
        return $query->result_array();
    }

    public function ajout($formArray){
        $this->db->insert('rayon',$formArray);
        return $id = $this->db->insert_id();
    }

    public function getray($id){
        $this->db->where('ray_ray',$id);
        $row = $this->db->get('rayon');
        return $row->row_array();
    }

    //famille
    public function select_famille()
    {
        $query =$this->db->query('SELECT * FROM famille');
        return $query->result_array();
    }
    public function ajout_famille($formArray){
        $this->db->insert('famille',$formArray);
        return $id = $this->db->insert_id();
    }
    public function getfam($id){
        $this->db->where('fam_fam',$id);
        $row = $this->db->get('famille');
        return $row->row_array();
    }
    

   
    //login
    
    public function createPOST($libelle, $gencode, $number, $date){
        return  $this->db->set("libelle_art", $libelle)
        ->set("quantity", $number)
        ->set("date", $date)
        ->set("gencode", $gencode)
        ->insert("temp");
    }
    public function getTemp(){
        $query =$this->db->query('SELECT * FROM temp');
        return $query->result_array();
    }

    public function vidertemp(){
        return $this->db->query('delete FROM temp');
    }
    public function select_login(){
        $query =$this->db->query('SELECT * FROM login');
        return $query->result_array();
    }
    public function createREf($Gencode){
      return  $this->db->set("id_ean", 3)
        ->set("ean_ean", $Gencode)
        ->set("primaire", 1)
        ->set("cat_ean", '10 020 220 001')
        ->insert("ean5");
    }

    public function createAno($gencode,$libelle){
        return  $this->db->set("libelle", $libelle)
        ->set("gencode", $gencode)
        ->insert("anomali");
         
      }
      public function createtemp($gencode,$libelle,$Quantite, $Date){
        return  $this->db->set("libelle_art", $libelle)
        ->set("gencode", $gencode)
        ->set("quantity", $Quantite)
        ->set("date", $Date)
        ->insert("temp");
      }
    public function createArticle($refArt,$gnc, $libelle_art, $secteur, $rayon , $famille){
        return  $this->db->set("reference ", 2)
        ->set("Gencode", $gnc)
        ->set("libelle_art", $libelle_art)
        ->set("secteur", $secteur)
        ->set("rayon", $rayon)
        ->set("famille", $famille)
        ->insert("article2");
      
      }

    public function selectDern(){
       $query = $this->db->query('SELECT * FROM ean5 order by ref_ean desc limit 1');
       return $query->result_array();
      }

    public function checkuser($email){
        $this->db->where('email',$email);
        $row = $this->db->get('login')->row_array();   
        return $row;  
    }

    public function ajout_user($formArray){
        $this->db->insert('login',$formArray);
        return $id = $this->db->insert_id();
    } 

}


