<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GalleryMenu_model extends CI_Model
{

    // tambah gambar gallery
    public function add_gallery($data)
    {
        $nama_input_file = 'gambar';
        if ($_FILES[$nama_input_file]['name'] != NULL) {

            //Start manual database transaction
            $this->db->trans_begin();

            $upload = upload_image($nama_input_file, "./template/home/atiga/gallery", "gly_");
            if ($upload['is_success'] == TRUE) {
                $data['file_name'] = $upload['file_name'];
            }
            $this->db->insert('tb_gallery', $data);

            if ($this->db->trans_status() === FALSE || $upload['is_success'] == FALSE) {
                $this->db->trans_rollback();
                flash_alert("Gagal tambah gambar pada gallery! " . $upload['msg'], "danger");
                redirect('admin/gallery');
            } else {
                $this->db->trans_commit();
                flash_alert("Berhasil tambah gambar " . $upload['filename'] . " pada gallery!");
                redirect('admin/gallery');
            }
        } else {
            flash_alert("Anda harus memilih gambar terlebih dahulu!", "danger");
            redirect('admin/gallery');
        }
    }

    // tambah gambar gallery
    public function updt_gallery($id_gallery, $data)
    {
        $nama_input_file = 'gambar';
        $upload_path = './template/home/atiga/gallery';
        $kode_gambar = "gly_";

        //Start manual database transaction
        $this->db->trans_begin();

        if ($_FILES[$nama_input_file]['name'] != NULL) {

            // hapus gbr lama
            $query = $this->db->query(' SELECT file_name
                                    FROM tb_gallery
                                    WHERE id_gallery = "' . $id_gallery . '" ');
            $result = $query->row_array();
            $fotolama = $result['file_name'];
            $path = $upload_path . '/' . $fotolama;
            if (!unlink($path)) {
                $err =  "Error hapus gambar.";
            }

            $upload = upload_image($nama_input_file, $upload_path, $kode_gambar);
            if ($upload['is_success'] == TRUE) {
                $data['file_name'] = $upload['file_name'];
            }
        }

        $this->db->update('tb_gallery', $data, "id_gallery = '" . $id_gallery . "'");

        if ($this->db->trans_status() === FALSE || $upload['is_success'] == FALSE) {
            $this->db->trans_rollback();
            flash_alert("Gagal edit gallery! " . $upload['msg'], "danger");
            redirect('admin/gallery');
        } else {
            $this->db->trans_commit();
            flash_alert("Berhasil edit gambar " . $upload['filename'] . " pada gallery!");
            redirect('admin/gallery');
        }
    }



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
    function fetch_galleryDetail($id_gallery)
    {
        $query = $this->db->query(' SELECT judul, keterangan, file_name, id_tipe
                                     FROM tb_gallery
                                     WHERE id_gallery = "' . $id_gallery . '" ');
        $result = $query->row_array();

        $judul = $result['judul'];
        $keterangan = $result['keterangan'];
        $file_name = $result['file_name'];
        $id_tipe = $result['id_tipe'];

        $output = '
        <form method="POST" action="' . base_url() . 'admin/gallery/updt_gallery/' . $id_gallery . '" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm">
                    <img src="' . base_url() . 'template/home/atiga/gallery/' . $file_name . '" style="width:300px;"></img><br>
                    <div class="form-group mb-0 mt-15">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Ganti gambar</span>
                            </div>
                            <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                            <span class="input-group-append">
                                    <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                            <input type="file" name="gambar">
                            </span>
                            <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </span>
                        </div>
                    </div>
                    <label class="mt-15">Pilih Tipe</label>
                    <select name="tipe" class="form-control">
                        ' . $this->tipe($id_tipe) . '
                    </select>
                    <label class="mt-15">Judul</label>
                    <input class="form-control type="text" placeholder="Judul" name="judul" value="' . $judul . '"></input>
                    <label class="mt-15">Keterangan</label>
                    <textarea class="form-control" rows="3" placeholder="Keterangan" name="keterangan">' . $keterangan . '</textarea>
                </div>
            </div>
            <div class="row justify-content-md-center mt-3">
                <button class="btn btn-success btn-wth-icon icon-wthot-bg icon-right"><span class="btn-text" type="sumbit">Save</span><span class="icon-label"><i class="fa fa-save"></i> </span></button>
                <a href="' . base_url() . 'admin/gallery/del_gallery/' . $id_gallery . '" class="ml-1"><button class="btn btn-danger btn-wth-icon icon-wthot-bg icon-right"><span class="btn-text">Hapus</span><span class="icon-label"><i class="fa fa-trash-o"></i> </span></button></a>
            </div>
        </form>';

        return $output;
    }

    // tambah gambar
    function fetch_addGallery()
    {

        $output = '
        <form method="POST" action="' . base_url() . 'admin/gallery/add_gallery" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group mb-0">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                            <span class="input-group-append">
                                    <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                            <input type="file" name="gambar">
                            </span>
                            <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </span>
                        </div>
                    </div>
                    <label class="mt-15">Pilih tipe</label>
                    <select name="tipe" class="form-control">
                        ' . $this->tipe() . '
                    </select>
                    <label class="mt-15">Judul</label>
                    <input class="form-control" type="text" placeholder="Judul" name="judul"></input>
                    <label class="mt-15">Keterangan</label>
                    <textarea class="form-control" rows="3" placeholder="Keterangan" name="keterangan"></textarea>
                </div>
            </div>
            <div class="row justify-content-md-center mt-3">
                <button class="btn btn-success btn-wth-icon icon-wthot-bg icon-right"><span class="btn-text" type="sumbit">Save</span><span class="icon-label"><i class="fa fa-save"></i> </span></button>
            </div>
        </form>';

        return $output;
    }

    function tipe($id_tipe = "")
    {
        $this->db->select("id_tipe, tipe");
        $this->db->from("tb_gallery_tipe");
        $this->db->order_by("id_tipe", "ASC");
        $tipe = $this->db->get()->result();

        $string = '';

        if ($id_tipe == "") {
            foreach ($tipe as $r) {
                $string .= '<option value="' . $r->id_tipe . '">' . $r->tipe . '</option>';
            }
        } else {
            foreach ($tipe as $r) {
                if ($id_tipe == $r->id_tipe) {
                    $slctd = 'selected';
                } else {
                    $slctd = '';
                }
                $string .= '<option value="' . $r->id_tipe . '" ' . $slctd . '>' . $r->tipe . '</option>';
            }
        }
        return $string;
    }
} //end model
