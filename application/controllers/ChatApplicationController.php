<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChatApplicationController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ChatApplication_model', 'table');

	}


	public function index()
	{
		/* $userData = $this->table->getData('*','user');
		echo "<pre>";
		print_r($userData); */

		$this->load->view('login_view');
	}
}
