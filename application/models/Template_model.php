<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template_model extends CI_Model
{

    function view($page, $data = NULL)
    {
        if ($data) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view($page, $data);
            $this->load->view('template/footer', $data);
        } else {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view($page);
            $this->load->view('template/footer', $data);
        }
    }
}
