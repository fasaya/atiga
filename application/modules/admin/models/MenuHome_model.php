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
            $order_column = array(null, "nama", "nilai", null);
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
        $output = '<div class="row">
        <div class="col-sm">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control mt-15" placeholder="Input Box">
                    <select class="form-control custom-select  mt-15">
                        <option selected>Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <textarea class="form-control mt-15" rows="3" placeholder="Textarea"></textarea>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mt-15" placeholder="Readonly Input Box" value="Readonly Input Box" readonly>
                    <select class="form-control custom-select mt-15">
                        <option selected>Readonly Select</option>
                        <option value="1" disabled>One</option>
                        <option value="2" disabled>Two</option>
                        <option value="3" disabled>Three</option>
                    </select>
                    <textarea class="form-control mt-15" rows="3" placeholder="Readonly Textarea" readonly>Readonly Textarea</textarea>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mt-15" placeholder="Disabled Input Box" disabled>
                    <select class="form-control custom-select mt-15" disabled>
                        <option selected>Disabled Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <textarea class="form-control mt-15" id="exampleFormControlTextarea1" rows="3" placeholder="Disabled Textarea" disabled></textarea>
                </div>
            </div>
        </div>
        </div>';

        return $output;
    }
} //end model
