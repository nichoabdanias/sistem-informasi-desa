<?php

class Dashboard extends CI_Controller{
    public function index() {
        $this->load->view('templates_layanan/header');
        $this->load->view('templates_layanan/navbar');
        $this->load->view('layanan/dashboard');
        $this->load->view('templates_layanan/footer');
    }
}