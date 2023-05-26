<?php session_start();
require_once('./admincp/config.php');

$sql_pro = "SELECT * FROM san_pham where TINHTRANG= 2 ";
$query_pro = mysqli_query($conn, $sql_pro);
//$result = mysqli_query($conn, $sql);
$san_pham = mysqli_fetch_all($query_pro, MYSQLI_ASSOC);
//mysqli_free_result($result);
//mysqli_close($conn);
//var_dump($_POST);

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
	<title>Bộ sưu tập</title>
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

<body class="main-layout">
	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="logo"><a href="Sanpham.php"><img src="images/Pustore.png"></a></div>
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
			<h1 class="new_text"><strong>Sản phẩm sắp ra mắt</strong></h1>
			<div class="collection_section_2">
				<div class="row">
					<div class="col-md-6">
						<div class="about-img">
							<button class="new_bt">Mới</button>
							<div class="shoes-img">
								<img src="images/Giày/<?php echo $san_pham[0]['HINH'] ?>">
							</div>
							<p class="sport_text">
								<?php echo $san_pham[0]['TENSP'] ?>
							</p>
							<div class="dolar_text"><strong style="color: #f12a47;">
									<?php echo $san_pham[0]['GIASP'] ?>
								</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
						<button class="seemore_bt">Yêu thích</button>
					</div>
					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2">
								<img src="images/Giày/<?php echo $san_pham[1]['HINH'] ?>">
							</div>
							<p class="sport_text">
								<?php echo $san_pham[1]['TENSP'] ?>
							</p>
							<div class="dolar_text"><strong style="color: #f12a47;">
									<?php echo $san_pham[1]['GIASP'] ?>
								</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="collection_text">Sản phẩm khác</div>


					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/68lygrlp.png"></div>
							<p class="sport_text">Nike Air Force 1 '07 LX</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">165.60</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/j45oieb4.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/j45oieb4.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/j45oieb4.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/j45oieb4.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/j45oieb4.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/j45oieb4.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="about-img2">
							<div class="shoes-img2"><img src="images/j45oieb4.png"></div>
							<p class="sport_text">Men Sports</p>
							<div class="dolar_text">$<strong style="color: #f12a47;">90</strong> </div>
							<div class="star_icon">
								<ul>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
									<li><a href="#"><img src="images/star-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- new collection section end -->

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