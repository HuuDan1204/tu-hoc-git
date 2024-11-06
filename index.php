<?php 
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/SachController.php';

// Require toàn bộ file Models
require_once './models/Sach.php';
require_once './models/TaiKhoan.php';
require_once './models/GioHang.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new SachController())->home(),
    'chi-tiet-san-pham' =>(new SachController())->chiTietSanPham(),
    'them-gio-hang' =>(new SachController())->themGioHang(),
    'gio-hang' =>(new SachController())->gioHang(),

    'login' =>(new SachController())->formLogin(),
    'check-login' =>(new SachController())->postLogin(),
    

};