<?php 
class art extends CI_Controller{

    public function __construct(){
       
        parent::__construct();
    
    }
    public function article(){
        $data['toa'] = $this->MD->select_data();
          $data['too'] = $this->MD->select_ano();
          $data['tata'] = $this->MD->art();
          $data['touart'] = $this->MD->select_article();
          $data['tato'] = $this->MD->select_rayon();
          $data['tati'] = $this->MD->select_famille();
          $data['titi'] = $this->MD->select_secteur();
          $data['cont'] = $this->MD->countoo1();
        $all_art=$this->MD->art();
        $data['all_art']=$all_art;

        $this->load->view('template/header');
        $this->load->view('crud/article',$data);
        $this->load->view('template/footer');

    }

    public function saisie(){
        
        $saisi = $this->input->post('q');
        //var_dump($saisi);die;
        $data['result'] = $this->MD->getean($saisi);
        
        if(!$data['result']){
           $data['error_message'] = "fanandramana";

        $all_art=$this->MD->select_article();
        $data['toa'] = $this->MD->select_data();
          $data['too'] = $this->MD->select_ano();
          $data['tata'] = $this->MD->art();
          $data['touart'] = $this->MD->select_article();
          $data['tato'] = $this->MD->select_rayon();
          $data['tati'] = $this->MD->select_famille();
          $data['titi'] = $this->MD->select_secteur();
          $data['cont'] = $this->MD->countoo1();

        $this->load->view('template/header');
        $this->load->view('crud/arti3',$data);
        $this->load->view('template/footer');
        }else{
                 //var_dump('tonga eto koa');die;
            
            $this->load->view('template/header');
            $this->load->view('crud/arti2',$data);
            $this->load->view('template/footer');
        }     

    }

    public function codeexist(){
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ean','ean','required');

        if($this->form_validation->run() == true){
           // var_dump('ato anatiny');die;
            $saisigencode = $this->input->post('ean');
        }
      
        $data['result'] = $this->MD->getgencodedossier($saisigencode);
         //var_dump($data['result']);die;
        if($data['result']){    
            //var_dump($data);die;
            $this->load->view('template/header');
            $this->load->view('crud/arti1', $data);
            $this->load->view('template/footer');
        }else{
//var_dump('io ary');die;
            $this->load->view('template/header');
            $this->load->view('template/ajoutAnomalie');
            $this->load->view('template/footer');
        }

    }
    
    
    public function searchDossier(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('libelle','libelle','required');

        if($this->form_validation->run() == true){
            //var_dump('ato anatiny');die;
            $saisilibelle = $this->input->post('libelle');
        }

        
        $result = $this->MD->getlibelledossier($saisilibelle);
        if($result){
            $data = array('result' => $result
        );
            //var_dump($result);die;
            $this->load->view('template/header');
            $this->load->view('ajoutAnomalieExist', $data);
            $this->load->view('template/footer');
        }else{
            $this->load->view('template/header');
            $this->load->view('template/ajoutAnomalie');
            $this->load->view('template/footer');
        }
           
    }

    public function searchDossier1(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('libelle','libelle','required');

        if($this->form_validation->run() == true){
            //var_dump('ato anatiny');die;
            $saisilibelle = $this->input->post('libelle');
        }

        
        $result = $this->MD->getlibelledossier($saisilibelle);
        if($result){
            $data = array('result' => $result
        );
            //var_dump($result);die;
            $this->load->view('template/header');
            $this->load->view('ajoutanoma', $data);
            $this->load->view('template/footer');
        }else{
            $this->load->view('template/header');
            $this->load->view('crud/arti4');
            $this->load->view('template/footer');
        }
           
    }

    public function searcharticle(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('libelle_art','libelle_art','required');

        if($this->form_validation->run() == true){
            //var_dump('ato anatiny');die;
            $saisilibelle = $this->input->post('libelle_art');
        }

        
        $result = $this->MD->getlibelleart($saisilibelle);
        if($result){
            $data = array('result' => $result
        );
            //var_dump($result);die;
            $this->load->view('template/header');
            $this->load->view('ajoutAnomalieExist', $data);
            $this->load->view('template/footer');
        }else{
            $this->load->view('template/header');
            $this->load->view('template/ajoutAnomalie');
            $this->load->view('template/footer');
        }
    
    }
    
    
    


    public function creer(){
        $data['toa'] = $this->MD->select_data();
        $data['too'] = $this->MD->select_ano();
        $data['tata'] = $this->MD->art();
        $data['touart'] = $this->MD->select_article();
        $data['tato'] = $this->MD->select_rayon();
        $data['tati'] = $this->MD->select_famille();
        $data['titi'] = $this->MD->select_secteur();
        $data['cont'] = $this->MD->countoo1();
        //var_dump($data['libe'] );die;
        $data['sect'] = $this->MD->sect();

        $this->load->view('template/header');
        $this->load->view('drud/ajoutart',$data);
    }

    public function addArt(){
       $ref = $this->input->post('ref');
       $Gencode = $this->input->post('Gencode');
       $libelle_art = $this->input->post('libelle_art');
       $secteur = $this->input->post('secteur');
       //var_dump($secteur);die;
       $rayon = $this->input->post('rayon');
       $famille = $this->input->post('famille');
       $this->MD->createREf($Gencode);
     $dern =  $this->MD->selectDern();
     $refArt = $dern[0]["ref_ean"];
     $gnc = $dern[0]["ean_ean"];

     $this->MD->createArticle($refArt,$gnc, $libelle_art, $secteur, $rayon , $famille);

     var_dump('tafiditra koa');die;
    }

    public function addAno(){
      //  var_dump('okokok');die;
        $gencode = $this->input->post('gencode');
        $libelle = $this->input->post('Libelle_art');
        $Quantite = $this->input->post('Quantite');
        $Date = $this->input->post('date');
        
        $this->MD->createAno($gencode,$libelle);
       
        $this->MD->createtemp($gencode,$libelle,$Quantite, $Date);
        
        $data['toa'] = $this->MD->select_data();
          $data['too'] = $this->MD->select_ano();
          $data['tata'] = $this->MD->art();
          $data['touart'] = $this->MD->select_article();
          $data['tato'] = $this->MD->select_rayon();
          $data['tati'] = $this->MD->select_famille();
          $data['titi'] = $this->MD->select_secteur();
          $data['cont'] = $this->MD->countoo1();

        $all_art=$this->MD->select_article();
        $data['all_art']=$all_art;
        //var_dump('aiza koa');die;
        $this->load->view('template/header');
        $this->load->view('crud/article2',$data);
        $this->load->view('template/footer');
 
      //var_dump($Gencode);die;
     }

     public function addAno1(){
        //  var_dump('okokok');die;
          $gencode = $this->input->post('gencode');
          $libelle = $this->input->post('Libelle');
          $Quantite = $this->input->post('Quantite');
          $Date = $this->input->post('date');
          
          $this->MD->createAno($gencode,$libelle);
         
          $this->MD->createtemp($gencode,$libelle,$Quantite, $Date);
          $data['toa'] = $this->MD->select_data();
          $data['too'] = $this->MD->select_ano();
          $data['tata'] = $this->MD->art();
          $data['touart'] = $this->MD->select_article();
          $data['tato'] = $this->MD->select_rayon();
          $data['tati'] = $this->MD->select_famille();
          $data['titi'] = $this->MD->select_secteur();
          $data['cont'] = $this->MD->countoo1();
  
          $all_art=$this->MD->select_article();
          $data['all_art']=$all_art;
          //var_dump('aiza koa');die;
          $this->load->view('template/header');
          $this->load->view('crud/article2',$data);
          $this->load->view('template/footer');
   
        //var_dump($Gencode);die;
       }


    public function tabletemp(){
        $draw = intval($this->input->get("draw"));
        $list = $this->MD->getTemp();

        $data = array();
        $datafinal = array();
        $etat = "";
        foreach ($list as $res){
           // var_dump($res);die;
            $data = array(
                $res['id'],
                $res['libelle_art'],
                $res['quantity'],
                $res['date'],
                $res['gencode']
            );

            array_push($datafinal, $data);
        }

        $result = array(
            "draw" => $draw,
            "recordsTotal" => "",
            "recordsFiltered" => "",
            "data" => $datafinal
        );
//var_dump($result);die;
        echo json_encode($result);
    }
    public function sess(){
      //  session_start();
      $libelle = $this->input->post('libelle');
       $gencode = $this->input->post('gencode');
       $number = $this->input->post('number');
       $date = $this->input->post('daty');
       $list = $this->MD->createPOST($libelle, $gencode, $number, $date);
            echo json_encode(array("statut" => 1));
       
      
     }

     public function vider(){
         $list = $this->MD->vidertemp();
              echo json_encode(array("statut" => 1));
         
        
       }
 

    public function index(){

    }

    public function create(){
        $this->mode->createdata();
        redirect("school");
    }

    public function profil(){
        $this->load->view('template/header');
        $this->load->view('template/profil');
        $this->load->view('template/footer');
    }

    
    public function login(){
        $this->load->model('mode');

            $this->load->library('form_validation');
            $this->load->library('session');
            
            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required');
            //var_dump('ok');die;
           /* if($this->form_validation->run() == true){*/
               
                $email = $this->input->post('email');
                $user = $this->MD->checkuser($email);
               
                if(!empty($user)){
                   
                    $password = $this->input->post('password');
                    
                    if($password == $user['password']){
                        //var_dump('tonga etii');die;
                        $sessArray['Num'] = $user['Num'];
                        $sessArray['name'] = $user['name'];
                        $sessArray['email'] = $user['email'];

                        $conn = array(
                            'email' =>  $email,
                            'password' => $password
                        );
                        $this->session->set_userdata($conn);
                       
                        redirect(uri: base_url().'index.php/pages/home');
                    }else{
                        $this->session->set_flashdata('msg','Votre email ou password esr incorrect, SVP repeter!');
                        redirect(uri: base_url().'index.php/art/login');    
                    }
                     
                }else{
                    $this->session->set_flashdata('msg','Votre email ou password esr incorrect, SVP repeter!');
                    redirect(uri: base_url().'index.php/art/login');
                }

        /*    } else {
                $this->load->view('template/login');
            }*/
            
        
        
        
    }

   

    
} 

?>