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
    <title>Giỏ hàng</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shoppingcart.css">
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
<?php session_start();
require_once('./admincp/config.php');

?>

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
                                <a class="nav-item nav-link last" href="Giohang.php"><img
                                        src="images/shop_icon.png"></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!-- CART & SOCIAL GROUP-->
    <div class="cartfixed hidden-xs hidden-sm" data-target="#shop_cart" data-toggle="collapse">
        <span class="countProduct">0</span><br>
        <img src="images/shop_icon.png">

        <div id="shop_cart" class="cart collapse">
            <span class="caret"></span>
            <ul class="list-group">
                <li class="list-group-item title">GIỎ HÀNG (<span class="countProduct">0</span>)</li>
                <li class="list-group-item divider"></li>
                <li class="list-group-item items">
                </li>
                <li class="list-group-item total"><span class="tleft">Tổng cộng:</span><span class="tright">0 VNĐ</span>
                </li>
                <li class="list-group-item butn">
                    <a href="https://ananas.vn/your-cart/" class="btn btn-checkout mini-cart-checkout">THANH TOÁN</a>
                </li>
                <li class="list-group-item butn">
                    <a href="javascript:void(0)" class="btn btn-addlike multipleAddLike"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- END SOCIAL GROUP -->
    <!-- new collection section start -->
    <div class="layout_padding collection_section">

        <div class="container">
        </div>
        <div class="shopping_cart_area">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Xóa</th>
                                                <th class="product_thumb">Ảnh</th>
                                                <th class="product_name">Sản Phẩm</th>
                                                <th class="product_size">Size</th>
                                                <th class="product_color">Color</th>
                                                <th class="product-price">Giá Tiền</th>
                                                <th class="product_quantity">Số lượng</th>
                                                <th class="product_total">Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if (isset($_SESSION['gio_hang'])) {
                                                $i = 0;
                                                $tongtien = 0;
                                                foreach ($_SESSION['gio_hang'] as $cart_item) {
                                                    $thanhtien = $cart_item['soluong'] * $cart_item['GIASP'];
                                                    $tongtien += $thanhtien;

                                                    $i++;


                                                    ?>


                                                    <tr>
                                                        <td class="product_remove"><a
                                                                href="themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i
                                                                    class="fa fa-trash-o"></i></a>
                                                        </td>
                                                        <td class="product_thumb"><img
                                                                src="images/Giày/<?php echo $cart_item['HINH']; ?>"></a>
                                                        </td>
                                                        <td class="product_name">
                                                            <?php echo $cart_item['TENSP']; ?>
                                                            </a>
                                                        </td>
                                                        <td class="product_size">
                                                            <?php echo $cart_item['id_size']; ?>
                                                            </a>
                                                        </td>

                                                        <td class="product_color">
                                                            <?php echo $cart_item['id_color']; ?>
                                                            </a>
                                                        </td>


                                                        <td class="product-price">
                                                            <?php echo number_format($cart_item['GIASP'], 0, ',') . ' VND' ?>

                                                        </td>
                                                        <td class="product_quantity">
                                                            <a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i
                                                                    class="fa-solid fa-square-plus"></i></a>
                                                            <?php echo $cart_item['soluong']; ?>
                                                            <a href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i
                                                                    class="fa-solid fa-square-minus"></i></a>
                                                        </td>

                                                        <td class="product-price">
                                                            <?php echo number_format($thanhtien, 0, ',', '.') . ' VND' ?>
                                                        </td>


                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <button type="submit">Cập Nhật Giỏ Hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Phiếu giảm giá start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Phiếu giảm giá</h3>
                                    <div class="coupon_inner">
                                        <p>Nhập mã phiếu giảm giá của bạn nếu bạn có một.</p>
                                        <input placeholder="Mã giảm giá" type="text">
                                        <button type="submit">Áp dụng phiếu giảm giá</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Tổng số giỏ hàng</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Tổng hóa đơn</p>
                                            <p>

                                                <?php
                                                if (isset($_SESSION['gio_hang'])) {
                                                    echo number_format($tongtien, 0, ',', '.') . ' VND';
                                                } else {
                                                    echo "";
                                                }

                                                ?>
                                            </p>
                                        </div>
                                        <div class="cart_subtotal ">
                                            <p>Giá vận chuyển</p>
                                            <p class="cart_amount"><span>Giá cố định</span>100,000 VND </p>
                                        </div>
                                        <a href="#">Tính vận chuyển</a>

                                        <div class="cart_subtotal">
                                            <p>Tổng cộng</p>
                                            <p class="cart_amount">
                                                <?php
                                                if (isset($_SESSION['gio_hang'])) {
                                                    echo number_format($tongtien, 0, ',', '.') . ' VND';
                                                } else {
                                                    echo "";
                                                }

                                                ?>
                                            </p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Phiếu giảm giá end-->
            </div>
            <!-- section footer start -->
            <div class="section_footer">
                <div class="container">
                    <div class="mail_section">
                        <div class="row">
                            <div class="col-sm-6 col-lg-2">
                                <div><a href="Trangchu.php"><img src="images/Pustore.png"></a></div>
                            </div>
                            <div class="col-sm-6 col-lg-2">
                                <div class="footer-logo"><img src="images/phone-icon.png"><span
                                        class="map_text">(84)991234589</span></div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="footer-logo"><img src="images/email-icon.png"><span
                                        class="map_text">Pustore@gmail.com</span></div>
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
                                <h2 class="shop_text">Địa chỉ</h2>
                                <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">85 ,
                                        Huỳnh
                                        Thúc Kháng , Quận 1 , TP Hồ Chí Minh</span></div>
                            </div>
                            <div class="col-sm-4 col-md-6 col-lg-3">
                                <h2 class="shop_text">Về cửa hàng </h2>
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
        <div class="copyright"></a></div>


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