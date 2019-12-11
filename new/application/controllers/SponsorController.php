<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SponsorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('security');
        $this->load->model('SponsModel');
        $this->load->helper(array('form' ,'url' ));
    }
    public function index($year)
    {

        $data = array(
            'year'       => $year,
            'category'   => $this->SponsModel->getCategory(),
            'spons'      => $this->SponsModel->getSponsorRefine($year)
        );
        if(isset($this->session->userdata['logged_in']))
        {
            $this->load->view('templates/header1');
            $this->load->view('sponsors',$data);
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('sponsors',$data);
            $this->load->view('templates/footer');
        }
    }
}
