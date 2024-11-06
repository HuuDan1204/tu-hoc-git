<?php 

class SachController
{
    public $modelSach ;
    public $modelTaiKhoan;
    public $modelGioHang;
    public function __construct(){
        $this->modelSach = new Sach ();
        $this->modelTaiKhoan = new TaiKhoan ();
        $this->modelGioHang = new GioHang ();
    }
    public function home(){
        $listsanpham = $this->modelSach->getAllSach();
        //var_dump($listSach);die();
        require_once './views/home.php';
    }

    public function chiTietSanPham(){
        $id = $_GET['id_san_pham'];
        $sanpham = $this->modelSach->getDetailSanPham($id);
        $listsanpham = $this->modelSach->getAllSach();

      $listbinhluan = $this->modelSach->getBinhLuanFromKhachHang($id);
        if($sanpham){
        require_once './views/infoSanPham.php';
        
        }
        else{
            header('location:'.BASE_URL_ADMIN .'?act=san-pham');
            exit();
        }
        
    }
    public function formLogin()
  {
    require_once './admin/views/auth/formLogin.php';
    deleteSessionError();
  }

  public function postlogin()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];
    //   var_dump($password);die;

      $user = $this->modelTaiKhoan->checkLogin($email, $password);

      if ($user == $email ) {
        $_SESSION['user_client'] = $user;

        header("location: " . BASE_URL);
        exit();
      } else {
        $_SESSION['error'] = $user;
        // var_dump($_SESSION['error']);die;

        $_SESSION['flash'] = true;
        header("location: " . BASE_URL . '?act=login');
        exit();
      }

    }
  }

  public function logout(){
    if(isset($_SESSION['user_admin'])){
       unset($_SESSION['user_admin']);
       header("location ".BASE_URL_ADMIN.'?act=login-admin' );
    }
}

public function themGioHang(){
    if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        if(isset($_SESSION['user_client'])){
            $mail = $this->modelTaiKhoan->getTaiKhoanFormEmail($_SESSION['user_client']);

            
            // var_dump($mail['id']);die;
            $gioHang = $this->modelGioHang->getGioHangFromUser($mail['id']);
            if(!$gioHang){
                $gioHangId = $this->modelGioHang->addGioHang($mail['id']);
                $gioHang = ['id'=>$gioHangId];    
                $chitietgiohang = $this->modelGioHang->getDetailGioHang($gioHang['id']);

            }else{
                $chitietgiohang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }
            
        
        $san_pham_id = $_POST['san_pham_id'];
        $so_luong = $_POST['so_luong'];

        $checksanpham = false;
        foreach($chitietgiohang as $detail){
            if($detail['san_pham_id'] == $san_pham_id ){
                $newSoLuong = $detail['so_luong'] + $so_luong;
                $this->modelGioHang->updateSoluong($gioHang['id'],$san_pham_id,$newSoLuong);
                $checksanpham = true;
                break;
            }
        }
        if(!$checksanpham){
            $this->modelGioHang->addDetailGioHang($gioHang['id'],$san_pham_id,$so_luong);
        }
        
           header("location:".BASE_URL.'?act=gio-hang');
    
    }else{
        var_dump("Chưa đăng nhập");die;
    }
    }
}

public function gioHang(){
    if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        if(isset($_SESSION['user_client'])){
            $mail = $this->modelTaiKhoan->getTaiKhoanFormEmail($_SESSION['user_client']);

            
            // var_dump($mail['id']);die;
            $gioHang = $this->modelGioHang->getGioHangFromUser($mail['id']);
            if(!$gioHang){
                $gioHangId = $this->modelGioHang->addGioHang($mail['id']);
                $gioHang = ['id'=>$gioHangId];    
                $chitietgiohang = $this->modelGioHang->getDetailGioHang($gioHang['id']);

            }else{
                $chitietgiohang = $this->modelGioHang->getDetailGioHang($gioHang['id']);
            }
            
        
          require_once './views/gioHang.php';
    }else{
        var_dump("Chưa đăng nhập");die;
    }
    }   
}

}