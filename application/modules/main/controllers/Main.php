<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_model', 'Temp');
    }

    public function index()
    {
        $this->home();
    }

    public function index3()
    {
        $this->load->view('home');
    }

    public function index2()
    {
        $this->load->view('home2');
    }

    public function home()
    {
        $this->Temp->view('page/home');
    }

    public function about()
    {
        $this->Temp->view('page/about');
    }

    public function contactus()
    {
        $this->Temp->view('page/contactus');
    }

    public function gallery()
    {
        $this->Temp->view('page/gallery');
    }
}
