<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">

    <!-- Title -->
    <!-- <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Home</h4>
    </div> -->
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <?php if ($this->session->flashdata('message')) { ?>
                    <?= $this->session->flashdata('message') ?>
                <?php } ?>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap">
                            <table id="tableku" class="table table-hover w-100 display pb-30">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>Gambar</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Container -->

<!-- JS -->
<script type="text/javascript" language="javascript">
    $(document).on("click", "#galleryDetail", function(e) {
        e.preventDefault();
        $('.modal-dialog').removeClass('modal-sm')
            .removeClass('modal-lg')
            .addClass('modal-md');
        $("#modal-title").text('Detail');
        $("#modal-body").load($(this).attr("href"));
        $("#modalKu").modal("show");
    });

    $(document).ready(function() {
        var dataTable = $('#tableku').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                url: "<?= base_url() . 'admin/gallery/fetch_gallery'; ?>",
                type: "POST"
            },
            "columnDefs": [{
                "targets": [0, 1, 2, 3, 4],
                "orderable": false,
            }, ],
        });
    });
</script>