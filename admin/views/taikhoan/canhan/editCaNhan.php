<?php include './views/layouts/header.php'; ?>
<!-- Navbar -->
<?php include './views/layouts/navbar.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include './views/layouts/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý tài khoản khách hàng</h1>
                </div>
                <div class="col-sm-3 text-end">
                    <a href="<?= BASE_URL_ADMIN . '/?act=form-sua-thong-tin-ca-nhan-quan-tri'; ?>"
                        class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="<?= BASE_URL . $thongtin['anh_dai_dien'] ?>" style="width: 100px"
                            class="avatar img-circle" alt="avatar"
                            onerror="this.onerror=null;this.src='https://i.pinimg.com/564x/48/a8/9b/48a89b444464e2487101372728e28740.jpg'">
                        <h6 class="mt-2">Họ tên : <?= $thongtin['ho_ten'] ?> </h6>
                        <h6 class="mt-2">Chức vụ :
                            <?= $thongtin['chuc_vu_id'] == 1 ? 'Quản trị viên' : 'Khách hàng'; ?> </h6>

                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <form action="<?= BASE_URL_ADMIN . '?act=sua-thong-tin-ca-nhan-quan-tri' ?>" method="post">

                        <hr>
                        <h3>Thông tin cá nhân</h3>

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Họ tên :</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" value="" name="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Last name:</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" value="Bishop">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Company:</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email:</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" value="janesemail@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Time Zone:</label>
                                <div class="col-lg-12">
                                    <div class="ui-select">
                                        <select id="user_time_zone" class="form-control">
                                            <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                            <option value="Alaska">(GMT-09:00) Alaska</option>
                                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US
                                                &amp; Canada)</option>
                                            <option value="Arizona">(GMT-07:00) Arizona</option>
                                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time
                                                (US &amp; Canada)</option>
                                            <option value="Central Time (US &amp; Canada)" selected="selected">
                                                (GMT-06:00) Central Time (US &amp; Canada)</option>
                                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US
                                                &amp; Canada)</option>
                                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" value="Đổi thông tin">
                                </div>
                            </div>
                        </form>
                        <hr>
                        <h3>Đổi mật khẩu</h3>
               
                        <form action="<?= BASE_URL_ADMIN . '/?act=sua-mat-khau-ca-nhan-quan-tri' ?>" method="post">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Mật khẩu cũ :</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="" name="old_pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Mật khẩu mới :</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="" name="new_pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nhập lại mật khẩu :</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="" name="confirm_pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary" value="Đổi mật khẩu">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <hr>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Control Sidebar -->
<?php include './views/layouts/footer.php'; ?>
</body>

</html>