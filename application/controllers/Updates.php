<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updates extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('update');
		$this->load->view('global/footer');
	}
	public function detail()
	{
		$this->load->view('global/header');
		$this->load->view('update-detail');
		$this->load->view('global/footer');
	}



}
