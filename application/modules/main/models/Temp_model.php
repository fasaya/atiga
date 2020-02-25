<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Temp_model extends CI_Model
{
    function view($view, $main = '', $headfoot = TRUE)
    {
        $this->load->model('Other_model', 'Other');
        if ($headfoot == TRUE) {
            $this->load->view('v_header');
            $this->load->view($view, $main);
            $this->load->view('v_footer');
        } else {
            $this->load->view($view, $main);
        }
    }
} //end model
