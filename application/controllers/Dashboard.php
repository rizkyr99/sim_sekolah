<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user')) {
            redirect('login');
        }
    }

    public function index()
    {
        $this->Template_model->view('dashboard');
    }
}
