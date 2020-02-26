<?php
defined('BASEPATH') or exit('No direct script access allowed');

function upload_image($nama_input, $upload_path, $kode_gambar)
{
    // $upload_path = './template/home/atiga/gallery';
    // $kode_gambar = "gly_";

    $ci = &get_instance();

    // if ($_FILES[$nama_input]['name'] != NULL) {

    $fileName = $_FILES[$nama_input]['name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $fileNameNew = $kode_gambar . uniqid('', true) . "." . $fileActualExt;

    // Set preference 
    $config['upload_path'] = $upload_path;
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = '1024'; // max_size in kb (1 mb = 1024 kb)
    $config['file_name'] = $fileNameNew;

    // Load upload library 
    $ci->load->library('upload', $config);

    // File upload
    if ($ci->upload->do_upload($nama_input)) {

        //upload
        $uploadData = $ci->upload->data();

        // Get data about the file
        $filename = $uploadData['file_name'];
        $upload = [
            'is_success' => TRUE,
            'file_name' => $filename,
            'msg' => ""
        ];
    } else {
        $error = array('error' => $ci->upload->display_errors());
        $upload = [
            'is_success' => FALSE,
            'msg' => $error['error']
        ];
    }
    return $upload;
    // }
}
