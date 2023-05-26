<? session_start();
require_once('./admincp/config.php');
var_dump($_SESSION);
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
    <title>Chi tiết sản phẩm</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-sanphamct.css.map" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesomesp.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="css/sanphamchitiet.css">
</head>
<!-- body -->

<body class="main-layout">
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo"><a href="Trangchu.php"><img src="images/Pustore.png"></a></div>
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

                                <a class="nav-item nav-link last" href="Login&Signup/login.php"><img
                                        src="images/login.png"></a>
                                <a class="nav-item nav-link last" href="Giohang.php"><img
                                        src="images/shop_icon.png"></a>
                                <form class="form-inline mt-2 mt-md-0" method="get" action="search.html">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm"
                                        aria-label="Search" name="keyword_tensanpham">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>



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
                    <li class="list-group-item total"><span class="tleft">Tổng cộng:</span><span class="tright">0
                            VNĐ</span>
                    </li>
                    <li class="list-group-item butn">
                        <a href="https://ananas.vn/your-cart/" class="btn btn-checkout mini-cart-checkout">THANH
                            TOÁN</a>
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
        <!-- Required meta tags -->

        </head>

        <body>
            <main role="main">
                <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
                <div class="container mt-4">
                    <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="card">
                        <div class="container-fliud">
                            <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                                action="/php/twig/frontend/giohang/themvaogiohang">
                                <input type="hidden" name="sp_ma" id="sp_ma" value="5">
                                <input type="hidden" name="sp_ten" id="sp_ten" value="Samsung Galaxy Tab 10.1 3G 16G">
                                <input type="hidden" name="sp_gia" id="sp_gia" value="10990000.00">
                                <input type="hidden" name="hinhdaidien" id="hinhdaidien"
                                    value="samsung-galaxy-tab-10.jpg">

                                <div class="wrapper row">
                                    <div class="preview col-md-6">
                                        <div class="preview-pic tab-content">
                                            <div class="tab-pane" id="pic-1">
                                                <img src="images/images.png">
                                            </div>
                                            <div class="tab-pane" id="pic-2">
                                                <img src="images/50f1ec1a-68dd-48fc-94de-7fdd61e3285e.jpg">
                                            </div>
                                            <div class="tab-pane active" id="pic-3">
                                                <img src="images/2gy68v2x.png">
                                            </div>
                                        </div>
                                        <ul class="preview-thumbnail nav nav-tabs">
                                            <li class="active">
                                                <a data-target="#pic-1" data-toggle="tab" class="">
                                                    <img src="images/images.png">
                                                </a>
                                            </li>
                                            <li class="">
                                                <a data-target="#pic-2" data-toggle="tab" class="">
                                                    <img src="images/50f1ec1a-68dd-48fc-94de-7fdd61e3285e.jpg">
                                                </a>
                                            </li>
                                            <li class="">
                                                <a data-target="#pic-3" data-toggle="tab" class="active">
                                                    <img src="images/2gy68v2x.png">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="details col-md-6">
                                        <h3 class="product-title">Nike Air White </h3>
                                        <div class="rating">
                                            <div class="stars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                            <span class="review-no">10.9565 reviews</span>
                                        </div>
                                        <p class="product-description">Thiết kế hiện đại </p>
                                        <small class="text-muted">Giá cũ: <s><span>6.000.000 VND</span></s></small>
                                        <h4 class="price">Giá hiện tại: <span>4.599.000 VND</span></h4>

                                        <h5 class="sizes">sizes:
                                            <span class="size" data-toggle="tooltip" title="cỡ Nhỏ">35</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Nhỏ">36</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Nhỏ">37</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Trung bình">38</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Trung bình">39</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Trung bình">40</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Trung bình">41</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Trung bình">42</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Đại">43</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Đại">44</span>
                                            <span class="size" data-toggle="tooltip" title="cỡ Đại">45</span>
                                        </h5>
                                        <h5 class="colors">colors:
                                            <span class="color orange not-available" data-toggle="tooltip"
                                                title="Hết hàng"></span>
                                            <span class="color green"></span>
                                            <span class="color blue"></span>
                                        </h5>
                                        <div class="form-group">
                                            <label for="soluong">Số lượng đặt mua:</label>
                                            <input type="number" class="form-control" id="soluong" name="soluong">
                                        </div>
                                        <div class="action">
                                            <a class="add-to-cart btn btn-default" id="btnThemVaoGioHang">Thêm vào giỏ
                                                hàng</a>
                                            <a class="like btn btn-default" href="#"><span
                                                    class="fa fa-heart"></span></a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="container-fluid">
                            <h3>Thông tin chi tiết về Sản phẩm</h3>
                            <div class="row">
                                <div class="col">
                                    Được phát hành vào 2020 đôi Nike Air được săn đón rất nhiều và là sản phẩm của năm
                                    của hãng Nike
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End block content -->
            </main>

            <!-- footer -->
            <footer class="footer mt-auto py-3">
                <div class="container">
                    <p class="float-right">
                        <a href="#">Về đầu trang</a>
                    </p>
                </div>
            </footer>
            <!-- end footer -->

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/popperjs/popper.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

            <!-- Custom script - Các file js do mình tự viết -->
            <script src="../assets/js/app.js"></script>

        </body>

</html>


<!-- section footer start -->
<div class="section_footer">
    <div class="container">
        <div class="mail_section">
            <div class="row">
                <div class="col-sm-6 col-lg-2">
                    <div><a href="Sanpham.php"><img src="images/Pustore.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-logo"><img src="images/phone-icon.png"><span
                            class="map_text">(84)991234589</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-logo"><img src="images/email-icon.png"><span
                            class="map_text">Pustore158@gmail.com</span></div>
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
                    <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">85 , Huỳnh
                            Thúc
                            Kháng , Quận 1 , Tp Hồ Chí Minh </span></div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3">
                    <h2 class="shop_text">Về cửa hàng </h2>
                    <div class="delivery_text">
                        <ul>
                            <li>Tuyển dụng</li>
                            <li>Về pháp lý</li>
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