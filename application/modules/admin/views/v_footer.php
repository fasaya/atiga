<!-- Footer -->
<div class="hk-footer-wrap container">
    <footer class="footer">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p>Pampered by<a href="#" class="text-dark">Hencework</a> © 2019</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="d-inline-block">Follow us</p>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
            </div>
        </div>
    </footer>
</div>
<!-- /Footer -->
</div>
<!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<div class="modal" tabindex="-1" role="dialog" id="modalKu">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body">

            </div>
        </div>
    </div>
</div>

<script type="text/javascript" language="javascript">
    $('#modalKu').on('hide.bs.modal', function() {
        setTimeout(function() {
            $('#modal-body').html('');
        }, 500);
    });
</script>

<!-- jQuery -->
<script src="<?= base_url() ?>template/admin/vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url() ?>template/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url() ?>template/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="<?= base_url() ?>template/admin/dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="<?= base_url() ?>template/admin/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="<?= base_url() ?>template/admin/dist/js/feather.min.js"></script>

<!-- Toggles JavaScript -->
<script src="<?= base_url() ?>template/admin/vendors/jquery-toggles/toggles.min.js"></script>
<script src="<?= base_url() ?>template/admin/dist/js/toggle-data.js"></script>

<!-- Toastr JS -->
<script src="<?= base_url() ?>template/admin/vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

<!-- Counter Animation JavaScript -->
<script src="<?= base_url() ?>template/admin/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?= base_url() ?>template/admin/vendors/jquery.counterup/jquery.counterup.min.js"></script>

<!-- Init JavaScript -->
<script src="<?= base_url() ?>template/admin/dist/js/init.js"></script>
<!-- <script src="<?= base_url() ?>template/admin/dist/js/dashboard2-data.js"></script> -->

<!-- Data Table JavaScript -->
<script src="<?= base_url() ?>template/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>template/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>template/admin/vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="<?= base_url() ?>template/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

<!-- Jasny-bootstrap  JavaScript -->
<script src="<?= base_url() ?>template/admin/vendors/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

<script>
    // Non sticky version
    $.toast("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, consequuntur doloremque eveniet eius eaque dicta repudiandae illo ullam. Minima itaque sint magnam dolorum asperiores repudiandae dignissimos expedita, voluptatum vitae velit.")
</script>

</body>

</html>