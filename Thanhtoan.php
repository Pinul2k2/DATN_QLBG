<?php
require_once('./admincp/config.php');

//$sql_pro = "SELECT * FROM gio_hang ";
//$query_pro = mysqli_query($conn, $sql_pro);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pullshoes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/thanhtoan.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo"><a href="#"><img src="images/Pustore.png"></a></div>
                </div>
                <div class="col-sm-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="Trangchu.php">Trang chủ</a>
                                <a class="nav-item nav-link" href="Bosuutap.php">Bộ sưu tập</p></a>
                                <a class="nav-item nav-link" href="Sanpham.php">Sản phẩm</a>
                                <a class="nav-item nav-link" href="Lienhe.php">Liên hệ</a>
                                <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                                <a class="nav-item nav-link last" href="Login&Signup/login.php"><img
                                        src="images/login.png"></a>
                                <a class="nav-item nav-link last" href="Shoppingcart.php"><img
                                        src="images/shop_icon.png"></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Content-->
    <!-- trang checkout -->

    <div class="shopping-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="location">
                        <ul>
                            <li><a href="Sanpham.php" title="go to homepage">Home<span>/</span></a> </li>
                            <li><strong> Shopping cart</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pages-title section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="pages-title-text text-center">
                                <h2>Thanh Toán</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <section class="pages checkout section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="main-input single-cart-form padding60">
                                <div class="log-title">
                                    <h3><strong>Chi tiết hóa đơn</strong></h3>
                                </div>
                                <div class="custom-input">
                                    <form action="?action=hoanthanhdonhang&idUser=<?php echo $data_user['idUser']; ?>"
                                        method="post">
                                        <input type="text" name="NguoiNhan" placeholder="Người nhận" required
                                            value="<?php echo $data_user['ho'] . ' ' . $data_user['ten']; ?>" />
                                        <input type="email" name="Email" placeholder="Địa chỉ Email.." required
                                            value="<?php echo $data_user['email']; ?>" />
                                        <input type="text" name="SDT" placeholder="Số điện thoại.." required
                                            pattern="[0-9]+" minlength="10"
                                            value="<?php echo $data_user['sodienthoai']; ?>" />
                                        <input type="text" name="DiaChi" placeholder="Đại chỉ giao hàng" required
                                            value="<?php echo $data_user['diachi']; ?>" />
                                        <br>
                                        <div class="submit-text">
                                            <button type="submit">Thanh toán</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="padding60">
                                <div class="log-title">
                                    <h3><strong>Hóa đơn</strong></h3>
                                </div>
                                <div class="cart-form-text pay-details table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <td>Thành Tiền</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <?php foreach ($_SESSION['san_pham'] as $key => $value) { ?>
                                                        <?php echo $value['TENSP']; ?>
                                                        <?php echo "SL: " . $value['soluong'] . '<br>'; ?>
                                                    <?php } ?>
                                                </th>
                                                <td>
                                                    <?php echo $_SESSION['GIASP'] . '.000 vnd<br>'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Giảm Giá</th>
                                                <!-- lấy a trên địa chỉ rồi inner join với bảng khuyễn mã để lấy giá trị khuyến mãi -->
                                                <td>
                                                    <?php $_SESSION['giatriKM'] = $data_sanpham['giatriKM'];
                                                    echo $_SESSION['giatriKM'] . '%'; ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tổng</th>
                                                <td>
                                                    <?php
                                                    if ($_SESSION['giatriKM'] != 0) {
                                                        $_SESSION['tongtien_KM'] = ($_SESSION['tongtien'] - ($_SESSION['tongtien'] * ($data_sanpham['giatriKM'])) / 100);
                                                        echo $_SESSION['tongtien_KM'];
                                                    } else {
                                                        echo $_SESSION['tongtien'];
                                                    }
                                                    ?>.000 VNĐ
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--End Content-->
    <!-- section footer start -->
    <div class="section_footer">
        <div class="container">
            <div class="mail_section">
                <div class="row">
                    <div class="col-sm-6 col-lg-2">
                        <div><a href="#"><img src="images/Pustore.png"></a></div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71)
                                1234567890</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-logo"><img src="images/email-icon.png"><span
                                class="map_text">Demo@gmail.com</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/google-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-4 col-lg-2">
                        <p class="dummy_text"> </p>
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <h2 class="shop_text">Địa chỉ </h2>
                        <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">85 , Huỳnh Thúc
                                Kháng , Quận 1 , TP Hồ Chí Minh.</span></div>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-3">
                        <h2 class="shop_text">Về cửa hàng</h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Tuyển dụng</li>
                                <li>Thông báo pháp lý</li>
                                <li>Về chúng tôi</li>
                                <li>Liên hệ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h2 class="adderess_text">Sản phẩm</h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Giày nam</li>
                                <li>Giày nữ</li>
                                <li>Sản phẩm giảm giá</li>
                                <li>Sản phẩm mới</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <h2 class="adderess_text">Bản tin</h2>
                        <div class="form-group">
                            <input type="text" class="enter_email" placeholder="Đăng nhập email" name="Name">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- section footer end -->
    <div class="copyright"></div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });


            $('#myCarousel').carousel({
                interval: false
            });

            //scroll slides on swipe for touch enabled devices

            $("#myCarousel").on("touchstart", function (event) {

                var yClick = event.originalEvent.touches[0].pageY;
                $(this).one("touchmove", function (event) {

                    var yMove = event.originalEvent.touches[0].pageY;
                    if (Math.floor(yClick - yMove) > 1) {
                        $(".carousel").carousel('next');
                    }
                    else if (Math.floor(yClick - yMove) < -1) {
                        $(".carousel").carousel('prev');
                    }
                });
                $(".carousel").on("touchend", function () {
                    $(this).off("touchmove");
                });
            });
    </script>
</body>

</html>