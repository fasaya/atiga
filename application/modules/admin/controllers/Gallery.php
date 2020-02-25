<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('GalleryMenu_model', 'Gallery');
        $this->load->model('Temp_model', 'Temp');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->Temp->view('gallery/semua');
    }

    // DATATABLES
    function fetch_gallery()
    {
        $fetch_data = $this->Gallery->make_datatables_gallery();
        $data = array();
        $no = 1;
        foreach ($fetch_data as $r) {

            $sub_array = array();
            $sub_array[] = $no . ".";
            $sub_array[] =  $r->judul;
            $sub_array[] = $r->keterangan;
            $sub_array[] = $r->tipe;
            $sub_array[] = '<a id="galleryDetail" href="' . base_url() . 'admin/gallery/fetch_galleryDetail/' . $r->id_gallery . '"><button class="btn btn-icon btn-icon-circle btn-secondary btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button></a>';
            $data[] = $sub_array;
            $no++;
        }
        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->Gallery->get_all_data_gallery(),
            "recordsFiltered" => $this->Gallery->get_filtered_data_gallery(),
            "data" => $data
        );
        echo json_encode($output);
    }

    // MODAL EDIT
    public function fetch_galleryDetail($code = "")
    {
        if ($code != "") {
            echo $this->Gallery->fetch_galleryDetail($code);
        }
    }
}
