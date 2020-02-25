<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Other_model extends CI_Model
{
    public function get_back_info($kode)
    {
        $query = $this->db->query(' SELECT nilai
                                     FROM back_info
                                     WHERE kode = "' . $kode . '" ');
        $result = $query->row_array();
        if ($result) {
            return $result['nilai'];
        } else {
            return "";
        }
    }
} //end model
