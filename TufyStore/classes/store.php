<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once  ($filepath.'/../lib/database.php');
    include_once  ($filepath.'/../helpers/format.php');
?>
<?php
    class store{
        private $db;
        private $fm;

        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function getstore_info(){
            $query = "SELECT * FROM thongtincuahang ";
            $result = $this->db->select($query);
            return $result;
        }

        public function getproduct_buys(){
            $query = "SELECT s.*
            FROM chitiethoadon as c, sanpham as s
            WHERE c.MaSanPham = s.MaSanPham
            GROUP BY c.MaSanPham
            LIMIT 4";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>