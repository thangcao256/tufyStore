<?php
include '../lib/session.php';
Session::checkSession();
?>
<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion navbar-menu-admin" id="accordionSidebar">
    <!-- Sidebar - Brand -->

    <li class="nav-item link-to-home-wrap">
        <a class="link-to-home" href="dangnhap.php">
            <i class="fas fa-home"></i>
            <span>
                Tufy Store
            </span>
        </a>
    </li>
    <!-- Nav Item - Charts -->
    <div class="nav-menu-wrap">
        <li class="nav-item">
            <a class="nav-link" href="nhasanxuat_danhsach.php">
                <i class="fas fa-warehouse"></i>
                <span>Nhà sản xuất</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="danhmuc_danhsach.php">
                <i class="fas fa-bars"></i>
                <span>Danh mục</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="loaisanpham_danhsach.php">
                <i class="fas fa-stream"></i>
                <span>Loại sản phẩm</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sanpham_danhsach.php">
                <i class="fab fa-shopify"></i>
                <span>Sản phẩm</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="hoadon_danhsach.php">
                <i class="fas fa-file-invoice-dollar"></i>
                <span>Hóa đơn</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="khachhang_danhsach.php">
                <i class="fas fa-users"></i>
                <span>Khách hàng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="nhanvien_danhsach.php">
                <i class="fa-solid fa-people-group"></i>
                <span>Nhân viên</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="voucher_danhsach.php">
                <i class="fas fa-ticket-alt"></i>
                <span>Voucher</span>
            </a>
        </li>
        
        <!-- <li class="nav-item">
            <a class="nav-link" href="quangcao.php">
                <i class="fas fa-sticky-note"></i>
                <span>Quảng cáo</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="chayanhdautrang_danhsach.php">
                <i class="fas fa-images"></i>
                <span>Chạy ảnh đầu trang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="chayanhcuoitrang_danhsach.php">
                <i class="fas fa-images"></i>
                <span>Chạy ảnh cuối trang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="thongtincuahang.php">
                <i class="fas fa-info-circle"></i>
                <span>Thông tin cửa hàng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="changepass.php">
                <i class="fa-solid fa-key"></i>
                <span>Đổi mật khẩu</span>
            </a>
        </li>
        <!-- <?php
        // error_reporting(0);
        // if (isset($_GET['action']) && $_GET['action'] == 'logout') {
        //     Session::destroy();
        // }
        ?>
        <li class="nav-item">
            <a class="nav-link" href="?action=logout">
                <i class="fas fa-arrow-right"></i>
                <span>Đăng xuất</span>
            </a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    </div>

</ul>   

<script src="https://kit.fontawesome.com/bb96c34b1a.js" crossorigin="anonymous"></script>
