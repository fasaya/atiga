<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item active" aria-current="page">Info</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Web Info</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->


    <section class="hk-sec-wrapper">
        <?php if ($this->session->flashdata('message')) { ?>
            <?= $this->session->flashdata('message') ?>
        <?php } ?>
        <form method="POST" action="<?= base_url() ?>admin/setting/info">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label mb-10">Website Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nama Website" name="nama_web" value="<?= $this->Other->get_back_info('nama_web'); ?>">
                        </div>
                        <?= form_error('nama_web', '<p class="flash-alert">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10">Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-lock"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $this->Other->get_back_info('alamat'); ?>">
                        </div>
                        <?= form_error('alamat', '<p class="flash-alert">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $this->Other->get_back_info('email'); ?>">
                        </div>
                        <?= form_error('email', '<p class="flash-alert">', '</p>'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label mb-10">Phone Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="No. Telepon" name="no_tlp" value="<?= $this->Other->get_back_info('no_tlp'); ?>">
                        </div>
                        <?= form_error('no_tlp', '<p class="flash-alert">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10">Whatsapp Number</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="No. Whatsapp" name="no_wa" value="<?= $this->Other->get_back_info('no_wa'); ?>">
                        </div>
                        <?= form_error('no_wa', '<p class="flash-alert">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="control-label mb-10">CS Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email CS" name="email_cs" value="<?= $this->Other->get_back_info('email_cs'); ?>">
                        </div>
                        <?= form_error('email_cs', '<p class="flash-alert">', '</p>'); ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center mt-2">
                <button class="btn btn-success btn-wth-icon icon-wthot-bg btn-rounded icon-right"><span class="btn-text" type="sumbit">Save</span><span class="icon-label"><i class="fa fa-save"></i> </span></button>
            </div>
        </form>
    </section>


    <!-- /Row -->
</div>
<!-- /Container -->

<!-- JS -->
<script type="text/javascript" language="javascript">
    $(document).on("click", "#textHomeDetail", function(e) {
        e.preventDefault();
        $('.modal-dialog').removeClass('modal-sm')
            .removeClass('modal-md')
            .addClass('modal-lg');
        $("#modal-title").text('Edit');
        $("#modal-body").load($(this).attr("href"));
        $("#modalKu").modal("show");
    });

    $(document).ready(function() {
        var dataTable = $('#tableku').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?= base_url() . 'admin/menu/fetch_textHome'; ?>",
                type: "POST"
            },
            "columnDefs": [{
                "targets": [0, 3],
                "orderable": false,
            }, ],
        });
    });
</script>