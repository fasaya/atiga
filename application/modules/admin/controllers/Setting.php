<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Temp_model', 'Temp');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->info();
    }

    public function info()
    {
        $this->form_validation->set_rules('nama_web', 'Nama Website', 'trim|required|xss_clean');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('no_tlp', 'No. Telepon', 'trim|required|numeric');
        $this->form_validation->set_rules('no_wa', 'No. Whatsapp', 'trim|required|numeric');
        $this->form_validation->set_rules('email_cs', 'Email CS', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->Temp->view('setting/info');
        } else {
            $data = [
                'nama_web' => $this->input->post('nama_web', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'email' => $this->input->post('email', TRUE),
                'email_cs' => $this->input->post('email_cs', TRUE),
                'no_tlp' => $this->input->post('no_tlp', TRUE),
                'no_wa' => $this->input->post('no_wa', TRUE)
            ];

            // Update
            // $this->db->update('tb_anggota', $data, "no_anggota = '" . $no_anggota . "'");
            flash_alert("test");
            redirect('admin/setting/info');
        }
    }

    // DATATABLES
    function fetch_settingInfo()
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
