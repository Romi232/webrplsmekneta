<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function index()
    {
        $this->load->view('admin/contents/dashboard');
    }

    public function slider()
    {
        $this->load->view('admin/contents/list-slider');
    }

    public function katalog()
    {
        $this->load->view('admin/contents/katalog');
    }
    
}