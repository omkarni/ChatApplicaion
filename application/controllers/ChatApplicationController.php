<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatApplicationController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}


	public function index()
	{

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('Login_model', 'login');
            $status = $this->login->validate();

            if ($status == "ERR_INVALID_USERNAME") {
			
                $this->session->set_flashdata("error", "Username is Invalid");
            } else if ($status == "ERR_INVALID_PASSWORD") {
			
                $this->session->set_flashdata("error", "Password is Invalid");
            } else if($status == "Matched_data"){
				
                ## If Username and Password is valid then store array in Session
                $this->session->set_userdata($this->login->get_data());
                $this->session->set_userdata("logged_in", true);

                $this->db->cache_delete_all();
                ###### Redirect to dashboard module
				redirect("Applicationhome");
                if ($this->session->userdata("logged_in") ==  true) {
					redirect("Applicationhome");
				}
				exit;
                
                
            }
        }

        $this->load->view('login_view');
	}
}
