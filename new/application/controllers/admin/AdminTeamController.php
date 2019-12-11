<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AdminTeamController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminEventModel');
        $this->load->model('admin/AdminTeamModel');
        $this->load->model('UserModel');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('form' ,'url' ));
        $this->load->helper('security');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if (!isset($this->session->userdata['logged_in'])) {
            echo "You are not logged in!";
        } else {
            $data['events'] = $this->AdminEventModel->getAll();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidenav');
            $this->load->view('admin/team/events', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function team($eventid)
    {
        if (!isset($this->session->userdata['logged_in'])) {
            echo "You are not logged in!";
        } else {
            $data['teams'] = $this->AdminTeamModel->get($eventid);
            $data['eventname'] = $this->AdminEventModel->eventnamebyid($eventid);
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidenav');
            $this->load->view('admin/team/team', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    public function delete($teamid)
    {
        if (!isset($this->session->userdata['logged_in'])) {
            echo "You are not logged in!";
        } else {
            $data['result'] = $this->AdminTeamModel->delete($teamid);
            $data['events'] = $this->AdminEventModel->getAll();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidenav');
            $this->load->view('admin/team/events', $data);
            $this->load->view('admin/templates/footer');
        }
    }
}
