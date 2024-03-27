<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OurVanue extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('global/header');
        $this->load->view('update');
        $this->load->view('global/footer');
    }
    public function vanuemap()
    {
        $this->load->view('global/header');
        $this->load->view('vanue-map');
        $this->load->view('global/footer');
    }

    public function ConventionBuilding()
    {
        $this->load->view('global/header');
        $this->load->view('convention-building');
        $this->load->view('global/footer');
    }
    public function MeetingRoom()
    {
        $this->load->view('global/header');
        $this->load->view('meeting-room');
        $this->load->view('global/footer');
    }
    public function semiOutdoor()
    {
        $this->load->view('global/header');
        $this->load->view('semi-outdoor');
        $this->load->view('global/footer');
    }
    public function ExhibitionCenter()
    {
        $this->load->view('global/header');
        $this->load->view('exhibition-center');
        $this->load->view('global/footer');
    }
    public function VirtualTour()
    {
        $this->load->view('global/header');
        $this->load->view('virtual-tour');
        $this->load->view('global/footer');
    }
}
