<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        // Load URL helper
        $this->load->helper('url');

        // Load the view
        $this->load->view('home');
    }
}
