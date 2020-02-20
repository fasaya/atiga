<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Temp_model', 'Temp');
        $this->load->model('MenuHome_model', 'MenuHome');
    }

    public function index()
    {
        $this->home();
    }

    public function home()
    {
        $this->Temp->view('menu/home');
    }

    // DATATABLES
    function fetch_textHome()
    {
        $fetch_data = $this->MenuHome->make_datatables_textHome();
        $data = array();
        $no = 1;
        foreach ($fetch_data as $r) {

            $sub_array = array();
            $sub_array[] = $no . ".";
            $sub_array[] =  $r->nama;
            $sub_array[] = $r->nilai;
            $sub_array[] = '<a id="textHomeDetail" href="' . base_url() . 'admin/menu/fetch_textHomeDetail/' . $r->kode . '"><button class="btn btn-icon btn-icon-circle btn-secondary btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button></a>';
            $data[] = $sub_array;
            $no++;
        }
        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->MenuHome->get_all_data_textHome(),
            "recordsFiltered" => $this->MenuHome->get_filtered_data_textHome(),
            "data" => $data
        );
        echo json_encode($output);
    }

    // MODAL EDIT
    public function fetch_textHomeDetail($code = "")
    {
        if ($code != "") {
            echo $this->MenuHome->fetch_textHomeDetail($code);
        }
    }
}
