<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Temp_model', 'Temp');
    }

    public function index()
    {
        $this->Temp->view('dashboard');
    }
}
