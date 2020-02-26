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
        $this->load->helper('upload_image');
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
            $sub_array[] = '<img src="' . base_url() . 'template/home/atiga/gallery/' . $r->file_name . '" style="height:100px;"></img>';
            $sub_array[] = $r->judul;
            $sub_array[] = $r->keterangan;
            $sub_array[] = $r->tipe;
            $sub_array[] = '<a id="galleryDetail" href="' . base_url() . 'admin/gallery/fetch_galleryDetail/' . $r->id_gallery . '"><button class="btn btn-sm btn-icon btn-icon-circle btn-warning btn-icon-style-2"><span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button></a>';
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

    // tambah
    public function add_gallery()
    {
        $this->form_validation->set_rules('tipe', 'Tipe', 'trim|xss_clean|callback_tipe_gallery_check|required');
        $this->form_validation->set_rules('judul', 'judul', 'trim|xss_clean|required');
        $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $data = [
                'id_tipe' => $this->input->post('tipe', TRUE),
                'judul' => $this->input->post('judul', TRUE),
                'keterangan' => $this->input->post('keterangan', TRUE)
            ];
            $this->Gallery->add_gallery($data);
        }
    }

    // MODAL
    public function fetch_galleryDetail($id_gallery = "")
    {
        if ($id_gallery != "") {
            echo $this->Gallery->fetch_galleryDetail($id_gallery);
        }
    }

    public function fetch_addGallery()
    {
        echo $this->Gallery->fetch_addGallery();
    }

    // #######################################################################################
    // check form validation
    public function tipe_gallery_check($check)
    {
        $query = $this->db->query(' SELECT id_tipe
                                        FROM tb_gallery_tipe 
                                        WHERE id_tipe = "' . $check . '" ');
        // $result = $query->row_array();
        if ($query->num_rows() != 0) {
            return TRUE;
        } else {
            $this->form_validation->set_message('tipe_gallery_check', '{field} tidak ditemukan.');
            return FALSE;
        }
    }
}
