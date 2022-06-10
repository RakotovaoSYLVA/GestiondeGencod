<?php
    class det extends CI_Controller{

        public function __construct(){
       
            parent::__construct();
        
        }

        public function detail(){

            $rows = $this->MD->select_detail('14487');
            $data['rows'] = $rows;
            $this->load->view('template/header');
            $this->load->view('template/detail', $data);
            $this->load->view('template/footer');
        
        }

        public function det2(){

            $rows = $this->MD->select_detail('14623');
            $data['rows'] = $rows;
            $this->load->view('template/header');
            $this->load->view('det/det2', $data);
            $this->load->view('template/footer');
        
        }

        public function det3(){

            $rows = $this->MD->select_detail('14644');
            $data['rows'] = $rows;
            $this->load->view('template/header');
            $this->load->view('det/det3', $data);
            $this->load->view('template/footer');
        
        }

        public function det4(){

            $rows = $this->MD->select_detail('14638');
            $data['rows'] = $rows;
            $this->load->view('template/header');
            $this->load->view('det/det4', $data);
            $this->load->view('template/footer');
        
        }

       
    }

?>