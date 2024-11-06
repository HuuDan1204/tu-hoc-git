<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= BASE_URL ?>" class="brand-link  ">
      <img src="./asset/dist/img/anh2.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tiệm Sách</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./asset/dist/img/gojo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Gojou Satoru</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
                <a href="<?=BASE_URL_ADMIN  ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Thống kê </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="<?=BASE_URL_ADMIN ."?act=danh-muc" ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Danh Mục
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=BASE_URL_ADMIN ."?act=san-pham" ?>" class="nav-link">
            <i class="nav-icon fas fa-book-open"></i>
              <p>
                Sản Phẩm
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=BASE_URL_ADMIN ."?act=don-hang" ?>" class="nav-link">
            <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Đơn hàng
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
                <p>Quản lý tài khoản</p>
                <i class="fas fa-angle-left right " ></i>
            </a>
            <ul class="nav nav-treeview" >
            <li class="nav-item" >
                <a href="<?=BASE_URL_ADMIN ."?act=list-tai-khoan-quan-tri-vien" ?>" class="nav-link" >
                  <i class="nav-icon fas fa-user" ></i>
                  <p>Tài khoản quản trị viên</p>
                </a>
              </li>
              <li class="nav-item" >
                <a href="<?=BASE_URL_ADMIN ."?act=list-tai-khoan-khach-hang" ?>" class="nav-link" >
                  <i class="nav-icon fas fa-user" ></i>
                  <p>Tài khoản khách hàng</p>
                </a>
              </li>
              <!-- <li class="nav-item" >
                <a href="<?=BASE_URL_ADMIN .'?act=form-sua-thong-tin-ca-nhan-quan-tri'?>" class="nav-link" >
                  <i class="nav-icon fas fa-user" ></i>
                  <p>Tài khoản cá nhân</p>
                </a>
              </li> -->
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>