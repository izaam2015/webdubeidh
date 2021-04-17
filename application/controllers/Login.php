<?php

Class Login extends CI_Controller
{

    public function __construct()    {
        
        parent::__construct();
    }

    public function index() {
        $this->load->view('login/singin',"");
    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('', 'refresh');
    }
    public function mensajeacceso(){
        redirect('login/mensajeacceso');
    }
}

