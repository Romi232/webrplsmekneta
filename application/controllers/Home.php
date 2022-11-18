<?php

class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/slider');
        $this->load->view('templates/profile');
        $this->load->view('templates/achievement');
        $this->load->view('templates/gallery');
        $this->load->view('templates/structure');
        $this->load->view('templates/information');
        $this->load->view('templates/contact');
        $this->load->view('templates/footer');
    }
}