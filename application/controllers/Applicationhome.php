<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicationhome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ChatApplication_model', 'table');

	}


	public function index()
	{
		echo "Welcome to homepage";

    }

        
}
