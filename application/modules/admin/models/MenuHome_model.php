<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuHome_model extends CI_Model
{
    // DATATABLES
    function make_query_textHome()
    {

        $this->db->select("id, kode, nama, nilai");
        $this->db->where("id_menu", '1');
        $this->db->from("back_isi");

        $column_search = array('kode', 'nama', 'nilai');
        $i = 0;
        foreach ($column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        if (isset($_POST["order"])) {
            $order_column = array(null, null, null, null);
            $this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by("id", "ASC");
        }
    }
    function make_datatables_textHome()
    {
        $this->make_query_textHome();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    function get_filtered_data_textHome()
    {
        $this->make_query_textHome();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function get_all_data_textHome()
    {
        $this->make_query_textHome();
        return $this->db->count_all_results();
    }

    // DETAIL
    function fetch_textHomeDetail($code)
    {
        $query = $this->db->query(' SELECT nama, nilai
                                     FROM back_isi
                                     WHERE kode = "' . $code . '" ');
        $result = $query->row_array();

        $nama = $result['nama'];
        $nilai = $result['nilai'];

        $output = '
        <form method="POST" action="' . base_url() . 'admin/menu/updt_back_isi/' . $code . '">
            <div class="row">
                <div class="col-sm">
                    <h5>' . $nama . '</h5>
                    <textarea class="form-control mt-15" rows="3" placeholder="Isi" name="isi">' . $nilai . '</textarea>
                </div>
            </div>
            <div class="row justify-content-md-center mt-3">
                <button class="btn btn-success btn-wth-icon icon-wthot-bg icon-right"><span class="btn-text" type="sumbit">Save</span><span class="icon-label"><i class="fa fa-save"></i> </span></button>
            </div>
        </form>';

        return $output;
    }
} //end model
