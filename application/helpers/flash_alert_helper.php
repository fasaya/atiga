<?php
defined('BASEPATH') or exit('No direct script access allowed');


function flash_alert($isi = "", $tipe = 'success')
{
    $ci = &get_instance();
    $ci->session->set_flashdata(
        'message',
        '<div class="alert alert-' . $tipe . ' alert-dismissible fade show" role="alert">
                    ' . $isi . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>'
    );
}
