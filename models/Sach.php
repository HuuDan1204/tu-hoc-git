<?php 

class Sach 
{
    public $conn;
    public function __construct(){
       $this->conn = connectDB();
    }
    public function getAllSach(){
        try{
            $sql = 'SELECT san_phams.*, danh_mucs.ten_danh_muc
            FROM san_phams
            INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
              ';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }   
        catch(Exception $e){
            echo "Loi" .$e->getMessage();
        }
    }
    public function getDetailSanPham($id){
        try {
            $sql = 'SELECT san_phams.*, danh_mucs.ten_danh_muc 
            FROM san_phams
            INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
            WHERE san_phams.id = :id ;
            ';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id'=>$id]);

            return $stmt->fetch();

        } catch (Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
    public function getBinhLuanFromKhachHang($id){
        try {
            $sql = 'SELECT binh_luans.*,san_phams.ten_san_pham 
            FROM binh_luans
            INNER JOIN san_phams ON binh_luans.san_pham_id =san_phams.id 
            WHERE binh_luans.tai_khoan_id = :id
            ';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id'=>$id]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
 
}