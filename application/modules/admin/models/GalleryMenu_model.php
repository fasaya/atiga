<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GalleryMenu_model extends CI_Model
{
    // DATATABLES
    function make_query_gallery()
    {
        $this->db->select("tb_gallery.id_gallery, tb_gallery.judul, tb_gallery.keterangan, tb_gallery.file_name, tb_gallery_tipe.tipe");
        $this->db->where("tb_gallery.id_tipe = tb_gallery_tipe.id_tipe");
        $this->db->from("tb_gallery, tb_gallery_tipe");

        $column_search = array('tb_gallery.judul', 'tb_gallery.keterangan', 'tb_gallery_tipe.tipe');
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
            $order_column = array(null, null, null, null, null);
            $this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by("tb_gallery.id_gallery", "DESC");
        }
    }
    function make_datatables_gallery()
    {
        $this->make_query_gallery();
        if ($_POST["length"] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    function get_filtered_data_gallery()
    {
        $this->make_query_gallery();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function get_all_data_gallery()
    {
        $this->make_query_gallery();
        return $this->db->count_all_results();
    }

    // DETAIL
    function fetch_galleryDetail($code)
    {
        $query = $this->db->query(' SELECT nama, nilai
                                     FROM back_isi
                                     WHERE kode = "' . $code . '" ');
        $result = $query->row_array();

        $nama = $result['nama'];
        $nilai = $result['nilai'];

        $output = '
        <form method="POST" action="' . base_url() . 'admin/gallery/updt_gallery/' . $code . '">
            <div class="row">
                <div class="col-sm">
                    <h5>' . $nama . '</h5>
                    <select name="" class="form-control">
                        <option>Tipe</option>
                    </select>
                    <input class="form-control" type="text" placeholder="Judul" name="judul"></input>
                    <textarea class="form-control mt-15" rows="3" placeholder="Keterangan" name="keterangan">' . $nilai . '</textarea>
                </div>
            </div>
            <div class="row justify-content-md-center mt-3">
                <button class="btn btn-success btn-wth-icon icon-wthot-bg icon-right"><span class="btn-text" type="sumbit">Save</span><span class="icon-label"><i class="fa fa-save"></i> </span></button>
            </div>
        </form>';

        return $output;
    }
} //end model
