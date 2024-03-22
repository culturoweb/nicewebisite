<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('about');
		$this->load->view('global/footer');
	}

	public function aboutpik()
	{
		$this->load->view('global/header');
		$this->load->view('about-pik');
		$this->load->view('global/footer');
	}

	public function aboutasg()
	{
		$this->load->view('global/header');
		$this->load->view('about-asg');
		$this->load->view('global/footer');
	}
}
