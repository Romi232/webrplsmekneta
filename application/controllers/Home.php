<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('home/header');
        $this->load->view('home/slider');
        $this->load->view('home/profile');
        $this->load->view('home/achievement');
        $this->load->view('home/gallery');
        $this->load->view('home/structure');
        $this->load->view('home/information');
        $this->load->view('home/contact');
        $this->load->view('home/footer');
    }
}