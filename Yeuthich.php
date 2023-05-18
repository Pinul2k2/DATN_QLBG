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
    <title>Yêu thích</title>
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
</head>
<!-- body -->

<body class="main-layout">
    <!-- header section start -->
    <div class="header_section header_main">
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
                                <a class="nav-item nav-link" href="Bosuutap.php">Bộ sưu tập</a>
                                <a class="nav-item nav-link" href="Sanpham.php">Sản phẩm</a>
                                <a class="nav-item nav-link" href="Lienhe.php">Liên hệ</a>
                                <a class="nav-item nav-link last" href="Login&Signup/login.php"><img
                                        src="images/login.png"></a>

                                <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a> <a
                                    class="nav-item nav-link last" href="Giohang.php"><img
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
    <!--Content-->
    <div class="main-cart container-fluid">
        <input type="hidden" class="isPageWishList" value="1">
        <input type="hidden" class="shareCart" value="1435">
        <div class="row wishlist" data-wishlist="">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 title-1">DANH MỤC YÊU THÍCH CỦA BẠN</div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 infor-bar">
                <div class="left"><span id="number-product-of-wish-list">1</span> sản phẩm </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item-divider-2"></div>
            <div class="block-wish-list product-786805-35">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 item-2">
                    <div class="media">
                        <div class="media-left">
                            <a href="https://ananas.vn/product-detail/av00174/"><img class="media-object"
                                    src="https://ananas.vn/wp-content/uploads/Pro_AV00174_1-500x500.jpeg" height="283"
                                    width="283" data-holder-rendered="true"></a>
                        </div>
                        <div class="media-body">
                            <a href="https://ananas.vn/product-detail/av00174/">
                                <h4 class="media-heading">Vintas Jazico - High Top</h4>
                            </a>
                            <h5 class="price"><span class="saleoff"><strong>Giá: </strong>780.000 VNĐ</span>
                            </h5>

                            <div class="row bottom">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5>Size</h5>
                                    <select class="selectpicker productSize selectSize bs-select-hidden"
                                        data-style="btn" data-size-current="35" data-quantity-current="1"
                                        data-page="wish-list">
                                        <option>&nbsp;</option>
                                        <option selected="">35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                    </select>
                                    <div class="btn-group bootstrap-select productSize selectSize"><button type="button"
                                            class="dropdown-toggle btn" data-toggle="dropdown" title="35"><span
                                                class="filter-option pull-left">35</span>&nbsp;<span
                                                class="bs-caret"><span class="caret"></span></span></button>
                                        <div class="dropdown-menu open">
                                            <ul class="dropdown-menu inner" role="menu">
                                                <li data-original-index="0"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">&nbsp;</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="1" class="selected"><a tabindex="0" class=""
                                                        style="" data-tokens="null"><span class="text">35</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="2"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">36</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="3"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">37</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="4"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">38</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="5"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">39</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="6"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">40</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="7"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">41</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="8"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">42</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="9"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">43</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="10"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">44</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="11"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">45</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="12"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">46</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <h5>Số lượng</h5>
                                    <select
                                        class="selectpicker quantity productQuantity selectQuantity bs-select-hidden"
                                        data-style="btn" data-quantity-current="1" data-size-current="35"
                                        data-page="wish-list">
                                        <option selected="">1</option>
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <div class="btn-group bootstrap-select quantity productQuantity selectQuantity">
                                        <button type="button" class="dropdown-toggle btn" data-toggle="dropdown"
                                            title="1"><span class="filter-option pull-left">1</span>&nbsp;<span
                                                class="bs-caret"><span class="caret"></span></span></button>
                                        <div class="dropdown-menu open">
                                            <ul class="dropdown-menu inner" role="menu">
                                                <li data-original-index="0"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">1</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="1" class="selected"><a tabindex="0" class=""
                                                        style="" data-tokens="null"><span class="text">1</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="2"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">2</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="3"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">3</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="4"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">4</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="5"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">5</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="6"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">6</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="7"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">7</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="8"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">8</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="9"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">9</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="10"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">10</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="11"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">11</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                <li data-original-index="12"><a tabindex="0" class="" style=""
                                                        data-tokens="null"><span class="text">12</span><span
                                                            class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 item-2-1">
                    <div class="price">780.000VNĐ</div>
                    <div class="status">Còn hàng</div>
                    <div class="button" data-id="786805" data-size="35" data-quantity="1">
                        <input type="hidden" id="productId" value="786805">
                        <button class="btn btn-addcart btn-like addCartFromWishList" data-action="addCartFromWishList"
                            data-idproduct="786805" data-productsize="35"><img src="images/shop_icon.png"></button>
                        <button class="btn btn-delete removeProductOfWishList" data-action="removeProductWishList"
                            data-idproduct="786805" data-productsize="35" data-isdeleteall="0"><img
                                src="images/Trash_bin.svg">
                        </button>
                    </div>
                </div>|
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item-divider-3"></div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-3">
                <!--            -->
                <button class="btn btn-delall removeProductOfWishList" data-action="removeProductWishList"
                    data-isdeleteall="1">XÓA HẾT </button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 title-3">
                <a href="Sanpham.php" class="btn btn-cont">TIẾP TỤC MUA HÀNG</a>
            </div>
        </div>
    </div>

    <!--END Content-->

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
                                <li><a href="#"><img src="images/in-icon.png"></a></li>
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
                        <h2 class="shop_text">Address </h2>
                        <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">85 , Huỳnh Thúc
                                Kháng , Quận 1 , TP Hồ Chí Minh.</span></div>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-3">
                        <h2 class="shop_text">Về Công ty </h2>
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
                        <h2 class="adderess_text">Sản Phẩm</h2>
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