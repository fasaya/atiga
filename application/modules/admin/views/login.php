<!DOCTYPE html>
<!-- 
Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Login Web Admin</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="<?= base_url() ?>template/admin/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>template/admin/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>template/admin/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>


    <!-- HK Wrapper -->
    <div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <!-- <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-outline-secondary">Help</a>
                    <a href="#" class="btn btn-outline-secondary">About Us</a>
                </div>
            </header> -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                <!-- <a class="d-flex auth-brand align-items-center justify-content-center  mb-20" href="#">
                                    <img class="brand-img d-inline-block mr-5" src="dist/img/logo.png" alt="brand" /><span class="text-dark font-23">Sign</span>
                                </a> -->
                                <form action="<?= site_url() ?>webadmin/login" method="post">
                                    <h1 class="display-4 text-center mb-10">Sign In</h1>
                                    <p class="text-center mb-30">Masuk ke Akun Anda!</p>
                                    <?= $this->session->flashdata('message') ?>
                                    <div class="form-group">
                                        <input name="username" class="form-control" placeholder="Username" type="text">
                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="password" class="form-control" placeholder="Password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button class="btn btn-warning btn-block" type="submit">Login</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>template/admin/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>template/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>template/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="<?= base_url() ?>template/admin//js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?= base_url() ?>template/admin/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="<?= base_url() ?>template/admin/dist/js/feather.min.js"></script>

    <!-- Init JavaScript -->
    <script src="<?= base_url() ?>template/admin/dist/js/init.js"></script>
</body>

</html>