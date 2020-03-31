<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function login($role = NULL)
    {
        if ($role) {
            if ($role == 'pegawai') {
                $this->load->view('login-pegawai');
            }
        } else {
            $this->load->view('login');
        }
    }

    function lupa_password()
    {
        $this->load->view('lupa-password');
    }
}
