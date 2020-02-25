<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Other_model', 'Other');
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
            $this->db->update('back_info', ['nilai' => $this->input->post('nama_web', TRUE)], "kode = 'nama_web'");

            flash_alert("Berhasil update data!");
            redirect('admin/setting/info');
        }
    }
}
