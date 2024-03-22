<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('global/header');
		$this->load->view('gallery');
		$this->load->view('global/footer');
	}
	public function detail()
	{
		$this->load->view('global/header');
		$this->load->view('gallery-detail');
		$this->load->view('global/footer');
	}



}
