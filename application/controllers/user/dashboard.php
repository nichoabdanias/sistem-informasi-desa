<?php

class Dashboard extends CI_Controller{
    public function index() {
        $this->load->view('templates_user/header');
        $this->load->view('templates_user/navbar');
        $this->load->view('user/dashboard');
        $this->load->view('templates_user/footer');
    }
}