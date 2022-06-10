<?php 
class school extends CI_Controller{

    public function __construct(){
       
        parent::__construct();
    
    }
    public function ean(){

        if($this->input->method()=='post')
        {
            $this->form_validation->set_rules('id_ean','ean_ean','primaire','cat_ean','required');
            if($this->form_validation->run()==false)
            {
                echo "ERREUR!";
            }
            else{
                 $resp=$this->db->insert('ean5',$_POST);
                 if($resp)
                 {
                     echo "1";
                 }
                else{
                    echo "Erreur d'ajout";
                }
                   
            }
        } 
        else{

            $data['all_ean']=$this->MD->select_data();

            $this->load->view('template/header');
            $this->load->view('crud/ean',$data);
            $this->load->view('template/footer');
    
        }

    }

    public function delete_ean($id)
    {

        $this->db->where('ref_Ean',$id);
        $this->db->delete('ean5');
        redirect(base_url().'index.php/school/ean');
         
    }

    public function edit_ean($id)
    {
        if($this->input->method()=='post')
        {
             echo($_POST);
        }
        else
        {
            $data['cat_info'] = $this->MD->select_data('ean5','*',array('ref_ean'=>$id));
            $this->load->view('template/header');
            $this->load->view('crud/edit_ean',$data);
            $this->load->view('template/footer');
        }
        
    }

    //secteur
    public function secteur(){

            $data['all_sect']=$this->MD->select_secteur();

            $this->load->view('template/header');
            $this->load->view('crud/secteur',$data);
            $this->load->view('template/footer');
    }

    public function ajout_secteur(){
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('sect_sect','sect_sect','required');
        $this->form_validation->set_rules('libelle_sect','libelle_sect','required');

        if($this->form_validation->run() == true){
            $formArray = array();
            $formArray['sect_sect'] = $this->input->post('sect_sect');
            $formArray['libelle_sect'] = $this->input->post('libelle_sect');

            $id = $this->MD->ajoutsect($formArray);


            $response['status'] = 1;
            $response['message'] = "<div class=\"alert alert-success\">Bravo!!!! Ajout au sucess!</div>";
        }else{
            $response['status'] = 0;
            $response['sect_sect'] = strip_tags(form_error('sect_sect'));
            $response['libelle_sect'] = strip_tags(form_error('libelle_sect'));

        }

        echo json_encode($response);

    }

    public function delete_secteur($id)
    {
        $this->db->where('sect_sect',$id);
        $this->db->delete('secteur');
        redirect(base_url().'index.php/school/secteur');
         
    }

    public function edit_secteur($id)
    {
        if($this->input->method()=='post')
        {
             echo($_POST);
        }
        else
        {
            $data['cat_sect'] = $this->MD->select_secteur('secteur','*',array('sect_sect'=>$id));
            $this->load->view('template/header');
            $this->load->view('crud/edit_secteur',$data);
            $this->load->view('template/footer');
        }
        
    }


    //article

    public function article2(){
        $data['toi'] = $this->MD->select_ann();
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

        $this->load->view('template/header');
        $this->load->view('crud/article2',$data);
        $this->load->view('template/footer');

    }
    public function Anoma(){
        $data['tata'] = $this->MD->art();
        $data['touart'] = $this->MD->select_article();
        $data['tato'] = $this->MD->select_rayon();
        $data['tati'] = $this->MD->select_famille();
        $data['titi'] = $this->MD->select_secteur();
        $data['cont'] = $this->MD->countoo1();

        $all_art=$this->MD->select_ano();
        $data['all_art']=$all_art;

        $this->load->view('template/header');
        $this->load->view('crud/Anomalie',$data);
        $this->load->view('template/footer');

    }

    public function delete_article2($id)
    {
        $this->db->where('id_art',$id);
        $this->db->delete('arti');
        redirect(base_url().'index.php/school/article2');
         
    }

    public function edit_article($id)
    {
        if($this->input->method()=='post')
        {
             echo($_POST);
        }
        else
        {
            $data['cat_art'] = $this->MD->selete_dossier('dossier','*',array('art_dossier'=>$id));
            $this->load->view('template/header');
            $this->load->view('crud/edit_article2',$data);
            $this->load->view('template/footer');
        }
        
    }

    public function ajoutart(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('ref_ray','Ref_ray','required');
        $this->form_validation->set_rules('Gencode','Gencode','required');
        $this->form_validation->set_rules('libelle_art','libelle_art','required');
        $this->form_validation->set_rules('secteur','secteur','required');
        $this->form_validation->set_rules('rayon','rayon','required');
        $this->form_validation->set_rules('famille','famille','required');

        if($this->form_validation->run() == true){
            $formArray = array();
            $formArray['ref_ray'] = $this->input->post('ref_ray');
            $formArray['Gencode'] = $this->input->post('Gencode');
            $formArray['libelle_art'] = $this->input->post('libelle_art');
            $formArray['secteur'] = $this->input->post('secteur');
            $formArray['rayon'] = $this->input->post('rayon');
            $formArray['famille'] = $this->input->post('famille');

            $id = $this->MD->artiajout($formArray);


            $response['status'] = 1;
            $response['message'] = "<div class=\"alert alert-success\">Bravo!!!! Ajout au sucess!</div>";
        }else{
            $response['status'] = 0;
            $response['ref_ray'] = strip_tags(form_error('ref_ray'));
            $response['Gencode'] = strip_tags(form_error('Gencode'));
            $response['libelle_art'] = strip_tags(form_error('libelle_art'));
            $response['secteur'] = strip_tags(form_error('secteur'));
            $response['rayon'] = strip_tags(form_error('rayon'));
            $response['famille'] = strip_tags(form_error('famille'));

        }

        echo json_encode($response);


    }

        //rayon

    public function rayon(){
        $data['sise'] = $this->MD->select_ray();
        $all_ray = $this->MD->select_rayon();
        $data['all_ray']= $all_ray;

        $this->load->view('template/header');
        $this->load->view('crud/rayon',$data);
        $this->load->view('template/footer');

    }

    public function create_rayon(){
        $html = $this->load->view('drud/creray.php','',true);
        $response['html'] = $html;
        echo json_encode($response); 
    }

    public function ajout_rayon(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('ray_ray','rayon_ray','required');
        $this->form_validation->set_rules('id_ray','id_ray','required');
        $this->form_validation->set_rules('libelle_ray','libelle_ray','required');
        $this->form_validation->set_rules('sect_sect','sect_sect','required');

        if($this->form_validation->run() == true){

            $formArray = array();
            $formArray['ray_ray'] = $this->input->post('ray_ray');
            $formArray['id_ray'] = $this->input->post('id_ray');
            $formArray['libelle_ray'] = $this->input->post('libelle_ray');
            $formArray['sect_sect'] = $this->input->post('sect_sect');

            $id = $this->MD->ajout($formArray);

            $row = $this->MD->getray($id);
            $vdata['row'] = $row; 
            $rowhtml = $this->load->view('drud/editray.php',$vdata,true); 

            $response['status'] = 1;
            $response['row'] = $rowhtml;
            $response['message'] = "<div class=\"alert alert-success\">Bravo!!!! Ajout au sucess!</div>";
        }
        else{
            $response['status'] = 0;
            $response['ray_ray'] = strip_tags(form_error('ray_ray'));
            $response['id_ray'] = strip_tags(form_error('id_ray'));
            $response['libelle_ray'] = strip_tags(form_error('libelle_ray'));
            $response['sect_sect'] = strip_tags(form_error('sect_sect'));
        }

        echo json_encode($response);

    }

    public function edit_rayon($id){
        $row = $this->MD->getray($id);
        $data['row'] = $row;

        $html = $this->load->view('drud/editray.php',$data,true);
        $response['html'] = $html;
        echo json_encode($response);
    }

    //famille

    public function famille(){
        $data['all_fam']=$this->MD->select_famille();


        $this->load->view('template/header');
        $this->load->view('crud/famille',$data);
        $this->load->view('template/footer');

    }
    public function ajout_famille(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fam_fam','fam_fam','required');
        $this->form_validation->set_rules('libelle_fam','libelle_fam','required');
        $this->form_validation->set_rules('id_fam','id_fam','required');
        $this->form_validation->set_rules('ray_ray','ray_ray','required');

        if($this->form_validation->run() == true){

            $formArray = array();
            $formArray['fam_fam'] = $this->input->post('fam_fam');
            $formArray['libelle_fam'] = $this->input->post('libelle_fam');
            $formArray['id_fam'] = $this->input->post('id_fam');
            $formArray['ray_ray'] = $this->input->post('ray_ray');

            $id = $this->MD->ajout_famille($formArray);


            $response['status'] = 1;
            $response['message'] = "<div class=\"alert alert-success\">Bravo!!!! Ajout au sucess!</div>";
        }
        else{
            $response['status'] = 0;
            $response['fam_fam'] = strip_tags(form_error('fam_fam'));
            $response['libelle_fam'] = strip_tags(form_error('libelle_fam'));
            $response['id_fam'] = strip_tags(form_error('id_fam'));
            $response['ray_ray'] = strip_tags(form_error('ray_ray'));
        }

        echo json_encode($response);

    }

    public function getfamille($id){
        $row = $this->MD->getfam($id);
        $data['row'] = $row;

        $html = $this->load->view('crud/edit_fam.php',$data,true);
        var_dump($html);
        $response['html'] = $html;
        echo json_encode($response);
    }

    public function edit_famille($id)
    {
        if($this->input->method()=='post')
        {
             echo($_POST);
        }
        else
        {
            $data['cat_fam'] = $this->MD->select_famille('secteur','*',array('fam_fam'=>$id));
            $this->load->view('template/header');
            $this->load->view('crud/edit_fam',$data);
            $this->load->view('template/footer');
        }
        
    }

    public function delete_famille($id)
    {

        $this->db->where('fam_fam',$id);
        $this->db->delete('famille');
        redirect(base_url().'index.php/school/famille');
         
    }


    //users
    

    public function ajout_users(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');

        if($this->form_validation->run() == true){

            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = $this->input->post('password');

            $id = $this->MD->ajout_user($formArray);


            $response['status'] = 1;
            $response['message'] = "<div class=\"alert alert-success\">Bravo!!!! Ajout au sucess! <br> Vous avez azoutez un autre Utilisateur</div>";
        }
        else{
            $response['status'] = 0;
            $response['name'] = strip_tags(form_error('name'));
            $response['email'] = strip_tags(form_error('email'));
            $response['password'] = strip_tags(form_error('password'));

        }

        echo json_encode($response);
    }
   
} 

?>