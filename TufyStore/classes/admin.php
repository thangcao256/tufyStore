<?php 
    $filepath = realpath(dirname(__FILE__));
    include ($filepath.'/../lib/session.php');
    Session::checkLogin();
    include ($filepath.'/../lib/database.php');
    include ($filepath.'/../helpers/format.php');
?>
<?php 
    class admin {

        private $db;
        private $fm;

        public function __construct() {
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function login_admin($TenDangNhap, $MatKhau) {
            $TenDangNhap = $this->fm->validation($TenDangNhap);
            $MatKhau = $this->fm->validation($MatKhau);
            
            $TenDangNhap = mysqli_real_escape_string($this->db->link, $TenDangNhap);
            $MatKhau = mysqli_real_escape_string($this->db->link, $MatKhau);

            if(empty($TenDangNhap) || empty($MatKhau)){
                $alert = "Tài khoản hoặc mật khẩu không được bỏ trống.";
                return $alert;
            }else{
                $query = "SELECT * FROM quantrivien WHERE TenDangNhap = '$TenDangNhap' AND MatKhau = '$MatKhau' LIMIT 1";
                $result = $this->db->select($query);

                if($result != false){
                    $value = $result->fetch_assoc();
                    Session::set('QTVLOGIN', true);
                    Session::set('QTVID', $value['MaQuanTri']);
                    Session::set('QTVTENDANGNHAP', $value['TenDangNhap']);
                    Session::set('QTVTEN', $value['Ten']);
                    header('Location:dangnhap.php');
                    // $alert = "Tài khoản hoặc mật khẩu đúng rồi." .  $value['Ten'];
                    // return $alert;
                }else{
                    $alert = "Tài khoản hoặc mật khẩu không đúng.";
                    return $alert;
                }
            }
        
        }


    }
    
?>