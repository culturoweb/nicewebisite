<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('contact-us');
		$this->load->view('global/footer');
	}


}
