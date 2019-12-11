<?php
class events_temporary extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form' ,'url' ));
        $this->load->library('session');
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    public function index()
    {
    if(isset($this->session->userdata['logged_in']))
        {
          $this->load->view('templates/header1');
          $this->load->view('events_final');
          $this->load->view('templates/footer');
        }
        else
        {
          $this->load->view('templates/header');
          $this->load->view('events_final');
          $this->load->view('templates/footer');
        }
     }

    public function anadigix()
    {
    if(isset($this->session->userdata['logged_in']))
        {
          $this->load->view('templates/header1');
          $this->load->view('anadigix');
          $this->load->view('templates/footer');
        }
        else
        {
          $this->load->view('templates/header');
          $this->load->view('Anadigix');
          $this->load->view('templates/footer');
        }
     }
         public function lom()
    {
    if(isset($this->session->userdata['logged_in']))
        {
          $this->load->view('templates/header1');
          $this->load->view('lom');
          $this->load->view('templates/footer');
        }
        else
        {
          $this->load->view('templates/header');
          $this->load->view('lom');
          $this->load->view('templates/footer');
        }
     }
}