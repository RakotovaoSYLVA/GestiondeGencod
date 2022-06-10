<?php 

class pages extends CI_Controller{

    public function view(){
$session = $this->session->userdata();

        $page = "login";

        if(!file_exists(APPPATH.'views/template/'.$page.'.php')){
            show_404();
        }
        
        $data['title'] = "New page";

        $this->load->view('template/'.$page, $data);

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
            
        
      //var_dump($session);die;
/*if($session != null ){
    var_dump('connecté');die;
}else{
    var_dump('tsy connecté');die;
}*/  
        
    }

    public function home(){
        $page = "home";

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        
        $data['title'] = "New page";
        

        $this->load->view('template/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('template/footer');
    }

    public function users(){
        $data['use'] = $this->MD->select_login();

        $this->load->view('template/header');
        $this->load->view('pages/users',$data);
        $this->load->view('template/footer');
    }

    public function savecreate(){
        
       $this->load->library('form_validation');
       $this->form_validation->set_rules('Num','num','required');
       $this->form_validation->set_rules('name','name','required');
       $this->form_validation->set_rules('email','email','required');
       $this->form_validation->set_rules('password','password','required');

       if($this->form_validation->run() == true){
        var_dump('hi');die;
           $response['status'] = 1;
           $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = $this->input->post('password');

            var_dump($formArray);die;
            $id = $this->MD->ajout_user($formArray);

            $response['message'] = "<div class=\"alert alert-success\">Bravo!!!! Ajout au sucess! <br> Vous avez azoutez un autre Utilisateur</div>";
            
       } else {
        var_dump('hello');die;
          $response['status'] = 0;
           $response['name'] = strip_tags(form_error('name'));
           $response['email'] = strip_tags(form_error('email'));
           $response['password'] = strip_tags(form_error('password'));
       }


    }

    
}  
