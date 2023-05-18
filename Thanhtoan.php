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
    <link rel="stylesheet" href="css/Thanhtoan.css">
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
    <div class="main-cart container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 main-cart-left">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1-2" style="display: none">
                        BẠN CÓ MUỐN TÍCH ĐIỂM ĐỂ NHẬN ƯU ĐÃI &nbsp; &nbsp;
                        <img class="tooltip_attach" src="images/icon_cham_hoi.svg">
                        &nbsp; &nbsp;
                        <button class="btn btn-login" type="button" onclick="window.location.href= ''">ĐĂNG NHẬP
                        </button>
                        <div class="tooltip-container" hidden="">Rất nhiều ưu đãi đang chờ bạn, đăng nhập ngay để nhận!
                        </div>
                    </div>

                    <form id="orderForm">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1-1">THÔNG TIN GIAO HÀNG</div>

                        <!--                    -->
                        <!--                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">-->
                        <!--                            <div class="ck1">-->
                        <!--                                <input type="checkbox" id="cb1" class="checkToGetUserInfo"/>-->
                        <!--                                <label for="cb1"></label>-->
                        <!--                                Sử dụng thông tin trùng với Thông tin tài khoản-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    -->
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputSuccess2" placeholder="HỌ TÊN"
                                    name="customerName">
                                <span class="" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputSuccess2" placeholder="Số điện thoại"
                                    name="customerPhone">
                                <span class="" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputSuccess2" placeholder="Email"
                                    name="customerEmail">
                                <span class="" aria-hidden="true"></span>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="has-feedback">
                                <input type="text" class="form-control" id="inputError2" placeholder="Địa chỉ"
                                    name="customerAddress">
                                <span class="" aria-hidden="true"></span>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group location" id="list-city">
                            <select class="form-control" id="customerCity" name="customerCity">
                                <option value="0">Tỉnh/ Thành Phố</option>
                                <option value="5646">An Giang</option>
                                <option value="5986">Bà Rịa – Vũng Tàu</option>
                                <option value="5768">Bắc Giang</option>
                                <option value="6189">Bắc Kạn</option>
                                <option value="6394">Bạc Liêu</option>
                                <option value="6224">Bắc Ninh</option>
                                <option value="6034">Bến Tre</option>
                                <option value="5779">Bình Định</option>
                                <option value="5943">Bình Dương</option>
                                <option value="5791">Bình Phước</option>
                                <option value="5803">Bình Thuận</option>
                                <option value="5814">Cà Mau</option>
                                <option value="6089">Cần Thơ</option>
                                <option value="6198">Cao Bằng</option>
                                <option value="6012">Đà Nẵng</option>
                                <option value="5824">Đắk Lắk</option>
                                <option value="5840">Đắk Nông</option>
                                <option value="6341">Điện Biên</option>
                                <option value="5931">Đồng Nai</option>
                                <option value="6063">Đồng Tháp</option>
                                <option value="5849">Gia Lai</option>
                                <option value="6298">Hà Giang</option>
                                <option value="5867">Hà Nam</option>
                                <option value="5953">Hà Nội</option>
                                <option value="5874">Hà Tĩnh</option>
                                <option value="5888">Hải Dương</option>
                                <option value="6119">Hải Phòng</option>
                                <option value="5901">Hậu Giang</option>
                                <option value="5618">Hồ Chí Minh</option>
                                <option value="6243">Hòa Bình</option>
                                <option value="5910">Hưng Yên</option>
                                <option value="5921">Khánh Hòa</option>
                                <option value="5658">Kiên Giang</option>
                                <option value="6365">Kon Tum</option>
                                <option value="6332">Lai Châu</option>
                                <option value="5674">Lâm Đồng</option>
                                <option value="6212">Lạng Sơn</option>
                                <option value="6384">Lào Cai</option>
                                <option value="5996">Long An</option>
                                <option value="5687">Nam Định</option>
                                <option value="5698">Nghệ An</option>
                                <option value="6270">Ninh Bình</option>
                                <option value="6376">Ninh Thuận</option>
                                <option value="6318">Phú Thọ</option>
                                <option value="5720">Phú Yên</option>
                                <option value="6135">Quảng Bình</option>
                                <option value="6170">Quảng Nam</option>
                                <option value="6155">Quảng Ngãi</option>
                                <option value="6255">Quảng Ninh</option>
                                <option value="6144">Quảng Trị</option>
                                <option value="6077">Sóc Trăng</option>
                                <option value="6352">Sơn La</option>
                                <option value="5730">Tây Ninh</option>
                                <option value="6279">Thái Bình</option>
                                <option value="6288">Thái Nguyên</option>
                                <option value="5740">Thanh Hóa</option>
                                <option value="6109">Thừa Thiên – Huế</option>
                                <option value="6022">Tiền Giang</option>
                                <option value="6044">Trà Vinh</option>
                                <option value="6310">Tuyên Quang</option>
                                <option value="6054">Vĩnh Long</option>
                                <option value="6099">Vĩnh Phúc</option>
                                <option value="6233">Yên Bái</option>
                            </select>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 form-group location">
                            <select class="form-control" id="customerDistrict" name="customerDistrict">
                                <option value="0">Quận/ Huyện</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 form-group location">
                            <select class="form-control" id="customerWard" name="customerWard">
                                <option value="0">Phường/ Xã</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 form-group">
                            <div class="ck1">
                                <input type="checkbox" id="cb2" name="isNotification" />
                                <label for="cb2"></label>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">PHƯƠNG THỨC GIAO HÀNG</div>

                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                            <div class="ck1">
                                <input type="radio" id="cb3" name="shippingType" value="normal" checked="" />
                                <label for="cb3"></label>
                                Tốc độ tiêu chuẩn (từ 2 - 5 ngày làm việc) &nbsp; &nbsp; <img class="tooltip_attach"
                                    src="images/icon_cham_hoi.svg">
                            </div>
                            <div class="tooltip-container" hidden>Tuỳ vào địa chỉ giao hàng mà tốc độ giao hàng tiêu
                                chuẩn
                                sẽ khác nhau. Chúng tôi luôn cố gắng để đơn hàng đến tay bạn sớm nhất.
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group title-right normal-fee">0 VNĐ</div>


                        <!--                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">-->
                        <!--                        <div class="ck1">-->
                        <!--                            <input type="radio" id="cb4" name="shippingType" value="speed"/>-->
                        <!--                            <label for="cb4"></label>-->
                        <!--                            Tốc độ nhanh hơn &nbsp; &nbsp; <img class="tooltip_attach"-->
                        <!--                                                                src="-->
                        <!--">-->
                        <!--                        </div>-->
                        <!--                        <div class="tooltip-container" hidden>Là giao hàng rồi mới trả tiền đó, giao tận tay luôn! 2-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-group title-right speed-fee">0 VNĐ</div>-->

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">PHƯƠNG THỨC THANH TOÁN</div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                            <div class="ck1">
                                <input type="radio" id="cb5" name="paymentType" class="paymentType" value="direct"
                                    checked="">
                                <label for="cb5"></label>
                                Thanh toán trực tiếp khi giao hàng &nbsp; &nbsp; <img class="tooltip_attach"
                                    src="images/icon_cham_hoi.svg">
                                &nbsp; &nbsp; <img src="images/icon_COD.svg">
                            </div>
                            <div class="tooltip-container" hidden="">Là phương thức thanh toán bằng tiền mặt trực tiếp
                                khi nhận
                                hàng
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                            <div class="ck1">
                                <input type="radio" id="cb7" name="paymentType" class="paymentType" value="onepay">
                                <label for="cb7"></label>
                                Thanh toán bằng thẻ quốc tế và nội địa (ATM) &nbsp; &nbsp; <img class="tooltip_attach"
                                    src="images/icon_cham_hoi.svg">
                                &nbsp; &nbsp; <img src="images/icon_Cash_visa.svg">
                            </div>
                            <div class="tooltip-container" hidden="">Phương thức thanh toán sử dụng các loại thẻ quốc tế
                                như Visa, Master, JCB,… hoặc các loại thẻ thanh toán nội địa (ATM).
                                Vui lòng đọc kĩ các cam kết thanh toán khi chọn phương thức này. Phí thanh toán đối với
                                phương thức này hiện là 1% trên tổng giá trị giao dịch.
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 form-group">
                            <div class="ck1">
                                <input type="radio" id="cb8" name="paymentType" class="paymentType" value="momo">
                                <label for="cb8"></label>
                                Thanh toán bằng ví MoMo &nbsp; &nbsp; <img class="tooltip_attach"
                                    src="images/icon_cham_hoi.svg"> &nbsp; &nbsp; <img src="images/icon momo-01.svg">
                            </div>
                            <div class="tooltip-container" hidden="">
                                Phương thức dành cho khách hàng có tài khoản và lựa chọn thanh toán qua ví điện tử MoMo.
                                Vui lòng đọc kĩ các cam kết về phương thức này trước khi quyết định. Phí thanh toán đang
                                được áp dụng là 1% trên tổng thanh toán.
                            </div>
                        </div>
                    </form>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 main-cart-right">
                <ul class="list-group">
                    <li class="list-group-item title">ĐƠN HÀNG</li>
                    <li class="list-group-item divider"></li>

                    <input type="hidden" value="6827" class="productDetailId">
                    <input type="hidden" value="Crew Socks - Let It Be" class="productName">
                    <input type="hidden" value="Moonstruck" class="productColor">
                    <input type="hidden" value="ACS022" class="productSku">
                    <input type="hidden" value="95.000" class="productPrice">
                    <input type="hidden" value="Accessories | Phụ kiện" class="productCategory">
                    <input type="hidden" value="VND" class="currency">
                    <input type="hidden" value="0" class="discount">
                    <input type="hidden" value="Ananas" class="brand">
                    <input type="hidden" value="Socks | Vớ" class="productLine">
                    <input type="hidden" value="" class="designs">
                    <input type="hidden" value="" class="collection">
                    <input type="hidden" value="34" class="quantity">
                    <li class="list-group-item text-1">
                        <span class="title-6">Nike Juniper Trail 2 Next Nature</span>
                        <span class="title-6-1">5.200.000 VND</span>
                    </li>
                    <li class="list-group-item text-1-1">
                        <span class="title-6-2">Size: XL</span>
                        <span class="title-6-3">x 1</span>
                    </li>
                    <div class="listProductFromCart" data-id="6827" data-size="free" data-quantity="1">
                    </div>
                    <li class="list-group-item divider-1"></li>
                    <li class="list-group-item text-1">
                        <span class="title-3">Đơn hàng</span>
                        <span class="title-3-1"><span class="current-price"> 5.200.000</span> VND</span>
                    </li>
                    <li class="list-group-item text-2-2">
                        <span class="title-3">Giảm</span>
                        <span class="title-4-1">- <span class="discount">100.000</span> VND</span>
                    </li>
                    <li class="list-group-item text-2-3">
                        <span class="title-21">Phí vận chuyển</span>
                        <span class="title-22"><span class="shipping-fee">100.000</span> VND</span>
                    </li>
                    <li class="list-group-item text-2-3">
                        <span class="title-21">Phí thanh toán</span>
                        <span class="title-22"><span class="card-fee">0</span> VND</span>
                    </li>

                    <li class="list-group-item divider-1"></li>
                    <li class="list-group-item">
                        <span class="title-5">TỔNG CỘNG</span>
                        <span class="title-5-2"><span class="total-price">5.200.000</span> VND</span>
                    </li>
                    <li class="list-group-item">
                        <button data-href="https://ananas.vn/order-completed/"
                            class="btn btn-cart btn-complete-detail ">HOÀN TẤT ĐẶT HÀNG
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 main-cart-right error-quantity" style="display: none">
                <div class="item-notice">Sản phẩm hiện tại không đủ size / số lượng bạn cần</div>
            </div>

            <input type="hidden" value="1" class="isYourCart">

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