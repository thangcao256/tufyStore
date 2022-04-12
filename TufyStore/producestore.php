<?php include 'inc/header.php'; ?>

<style>
    .introduce-shop {
    max-height: 185px;
    overflow: hidden;
    transition: all ease-in-out .5s;
}

    .introduce-shop.show {
        max-height: 100%;
    }
</style>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title-page">Giới thiệu</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Giới thiệu</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->
<!-- Start About Page  -->
<?php
$store_info = $store->getstore_info();
if ($store_info) {
    while ($info = $store_info->fetch_assoc()) {
?>
        <div class="about-box-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-frame">
                            <img class="img-fluid full-radius shadow" src="<?php echo $info['HinhAnhMinhHoa']; ?>" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <h2 class="noo-sh-title-top ">Chúng tôi là <span><?php echo $info['TenCuaHang']; ?></span></h2>
                        <p class="text-justify introduce-shop" id="introduce-shop">
                            <?php echo $info['LoiGioiThieu']; ?>
                        </p>
                        <a class="btn hvr-hover max-width-mobile show-more-introduce" id="view-more-intro" style="margin-top: 20px;">Xem thêm</a>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-block-inner" data-aos="fade-up">
                            <h3 data-aos="fade-up" data-aos-delay="100" data-aos-easing="linear">Đáng tin cậy</h3>
                            <p data-aos="fade-up" data-aos-delay="200" data-aos-easing="linear">
                                Chúng tôi luôn đảm bảo hàng chất lượng, rõ nguồn gốc và xuất xứ, giá cả phù hợp với mọi
                                người.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-block-inner" data-aos="fade-up">
                            <h3 data-aos="fade-up" data-aos-delay="100" data-aos-easing="linear">Chuyên nghiệp</h3>
                            <p data-aos="fade-up" data-aos-delay="200" data-aos-easing="linear">
                                Đội ngũ nhân viên được đào tạo bài bản, phục vụ tận tình, luôn đặt khách hàng lên trên
                                mình.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-block-inner" data-aos="fade-up">
                            <h3 data-aos="fade-up" data-aos-delay="100" data-aos-easing="linear">Chuyên gia</h3>
                            <p data-aos="fade-up" data-aos-delay="200" data-aos-easing="linear">
                                Lĩnh vực bánh kẹo chính là thế mạnh của shop chúng tôi và chúng tôi cam đoan mọi loại sản
                                phẩm đều là tốt nhất.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <h2 class="noo-sh-title" data-aos="fade-up">Team <?php echo $info['TenCuaHang']; ?></h2>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="hover-team">
                            <div class="our-team" data-aos="zoom-in-up" data-aos-easing="linear">
                                <img src="./admin/images/avt_Thang.jpg" alt="" style="height: auto;"/>
                                <div class="team-content">
                                    <h3 class="title" style="min-height: 60px;">Cao Minh Thắng</h3> <span class="post">Android Developer</span>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="fab fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-google-plus"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-youtube"></a>
                                    </li>
                                </ul>
                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                                <p data-aos="fade-up" data-aos-easing="linear" style="height: 160px;">
                                Có ba nguyên tắc để đạt được tri thức… quan sát tự nhiên, suy ngẫm và thử nghiệm. Quan sát thu thập thực tế; suy ngẫm kết hợp chúng; thử nghiệm xác minh kết quả kết hợp đó.
                                </p>
                            </div>
                            <hr class="my-0">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="hover-team">
                            <div class="our-team" data-aos="zoom-in-up" data-aos-easing="linear">
                                <img src="./admin/images/avt_Nam.png" alt="" style="height: auto;"/>
                                <div class="team-content">
                                    <h3 class="title" style="min-height: 60px;">Đậu Sơn Nam</h3> <span class="post">Java Developer</span>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="fab fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-google-plus"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-youtube"></a>
                                    </li>
                                </ul>
                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                                <p data-aos="fade-up" data-aos-easing="linear" style="height: 160px;">
                                Học vấn do người siêng năng đạt được, tài sản do người tinh tế sở hữu, quyền lợi do người dũng cảm nắm giữ, thiên đường do người lương thiện xây dựng.
                                </p>
                            </div>
                            <hr class="my-0">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="hover-team">
                            <div class="our-team" data-aos="zoom-in-up" data-aos-easing="linear">
                                <img src="./admin/images/Ua_avt.png" alt="" style="height: auto;"/>
                                <div class="team-content">
                                    <h3 class="title" style="min-height: 60px;">Nguyễn Trương Nhất Anh</h3> <span class="post">Font-end Developer</span>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="fab fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-google-plus"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-youtube"></a>
                                    </li>
                                </ul>
                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                                <p data-aos="fade-up" data-aos-easing="linear" style="height: 160px;">
                                Sự ngu dốt, hơn hẳn cả sự ở không, mới là mẹ của tất cả các thói xấu. Ðịnh mệnh của các thế hệ tương lai nằm ở trong nền giáo dục khôn ngoan, một nền giáo dục cần phải phổ cập để có thể có ích lợi .
                                </p>
                            </div>
                            <hr class="my-0">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="hover-team">
                            <div class="our-team" data-aos="zoom-in-up" data-aos-easing="linear">
                                <img src="./admin/images/avt_Chi.png" alt="" style="height: auto;"/>
                                <div class="team-content">
                                    <h3 class="title" style="min-height: 60px;">Đoàn Thị Quý Chi</h3> <span class="post">Font-end Developer</span>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="fab fa-facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-google-plus"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fab fa-youtube"></a>
                                    </li>
                                </ul>
                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                                <p data-aos="fade-up" data-aos-easing="linear" style="height: 160px;">
                                Học… học để là chính mình, và học để từ bỏ với vẻ thanh cao những gì không phải là mình.
                                </p>
                            </div>
                            <hr class="my-0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-column text-center mt-4 mb-4 d-flex align-items-center">
    <div class="ml-auto add-cart-notify btn hvr-hover max-width-mobile font-weight-bold text-capitalize p-2" style="margin: auto; width: 100px;">
        <button onclick="history.back()" style="background: transparent;
    border-color: transparent;
    color: white;">Trở lại</button>
    </div>
</div>
        </div>
<?php
    }
}
?>
<!-- End About Page -->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
    
    var check = true;
    $('#view-more-intro').click(() => {
        check = !check;
        $('#view-more-intro').html("");
        if (check) {
            $('#introduce-shop').addClass('show');
            $('#view-more-intro').html("Ẩn bớt");
        } else {
            $('#introduce-shop').removeClass('show');
            $('#view-more-intro').html("Xem thêm");
        }
    })
</script>

<?php include 'inc/footer.php' ?>