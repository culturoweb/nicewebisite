<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Event extends CI_Controller

{



    /**

     * Index Page for this controller.

     *

     * Maps to the following URL

     * 		http://example.com/index.php/welcome

     *	- or -

     * 		http://example.com/index.php/welcome/index

     *	- or -

     * Since this controller is set as the default controller in

     * config/routes.php, it's displayed at http://example.com/

     *

     * So any other public methods not prefixed with an underscore will

     * map to /index.php/welcome/<method_name>

     * @see https://codeigniter.com/userguide3/general/urls.html

     */

    public function index()

    {
	$this->load->view('global/header');
        $this->load->view('event');
        $this->load->view('global/footer');
    }

    public function detail()

    {
	$this->load->view('global/header');
        $this->load->view('event-detail');
        $this->load->view('global/footer');
    }


}

