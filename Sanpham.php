<?php session_start();
require_once('./admincp/config.php');

$sql_pro = "SELECT * FROM san_pham ";
$query_pro = mysqli_query($conn, $sql_pro);
//$result = mysqli_query($conn, $sql);
//$san_pham = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
	<title>Sản phẩm</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
								<a class="nav-item nav-link" href="Bosuutap.php">Bộ sưu tập</a>
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
	<!-- New Arrivals section start -->
	<div class="prd1-cont container-fluid">
		<div class="row">

			<!-- FILTER ON PC VERSION (will be hidden on mobile)-->
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 prd1-left hidden-xs hidden-sm">
				<div class="row left-type">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" data-id="ALL" class=""><a href="#ALL" aria-controls="home" role="tab"
								data-toggle="tab">ALL | </a></li>
						<li role="presentation" class="type-divider"></li>
						<li role="presentation" data-id="NAM" class=""><a href="#NAM" aria-controls="profile" role="tab"
								data-toggle="tab"> | NAM | </a></li>
						<li role="presentation" class="type-divider"></li>
						<li data-id="NỮ" role="presentation" class=""><a href="#NỮ" aria-controls="profile" role="tab"
								data-toggle="tab"> | NỮ </a></li>

					</ul>
				</div>
				<div class="row left-divider"></div>
				<div class="row left-type-item">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane" id="NAM">
							<ul class="nav nav-pills nav-stacked">
								<li class="" data-id="Adidas">
									<a>Adidas
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Nike">
									<a>Nike
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Ananas">
									<a>Ananas
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Vans">
									<a>Vans
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Converse">
									<a>Converse
										<span class="glyphicon"></span></a>
								</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="NỮ">
							<ul class="nav nav-pills nav-stacked">
								<li class="" data-id="Adidas">
									<a>Adidas
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Nike">
									<a>Nike
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Ananas">
									<a>Ananas
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Vans">
									<a>Vans
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Converse">
									<a>Converse
										<span class="glyphicon"></span></a>
								</li>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane active" id="ALL">
							<ul class="nav nav-pills nav-stacked">
								<li class="" data-id="Adidas">
									<a>Adidas
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Nike">
									<a>Nike
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Ananas">
									<a>Ananas
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Vans">
									<a>Vans
										<span class="glyphicon"></span></a>
								</li>
								<li class="" data-id="Converse">
									<a>Converse
										<span class="glyphicon"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row left-divider"></div>

				<div class="row left-tree">
					<ul class="nav">
						<li class="first-lvl">
							<label label-default="" class="tree-toggle nav-header orange">TRẠNG THÁI <span
									class="caret caret-active"></span></label>
							<ul class="nav tree">
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Sản phẩm mới"
											hidden="">Sản phẩm mới <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox"
											value="Sản phẩm của tháng" hidden="">Sản phẩm tháng <span
											class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Thời trang"
											hidden="">Thời trang <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Giảm giá"
											hidden="">Giảm giá <span class="glyphicon"></span>
									</label>
								</li>
							</ul>
						</li>
						<li class="nav-divider"></li>
						<li class="first-lvl">
							<label label-default="" class="tree-toggle nav-header orange">KIỂU DÁNG <span
									class="caret caret-active"></span></label>
							<ul class="nav tree">
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Cổ cao"
											hidden="">Cổ cao <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Cổ trung"
											hidden="">Cổ trung <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Cổ thấp"
											hidden="">Cổ thấp <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Đế cao"
											hidden="">Đế cao <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Đế cao"
											hidden="">Đế thấp <span class="glyphicon"></span>
									</label>
								</li>
							</ul>
						</li>
						<li class="nav-divider"></li>
						<li class="first-lvl">
							<label label-default="" class="tree-toggle nav-header orange">DÒNG SẢN PHẨM <span
									class="caret caret-active"></span></label>
							<ul class="nav tree">
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="basas"
											hidden="">Mỗi Ngày <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="vintas"
											hidden="">Chạy Bộ <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="urbas"
											hidden="">Đá Banh <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="pattas"
											hidden="">Tennis <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="tote-bag"
											hidden="">Bóng Rổ <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="graphic-tee"
											hidden="">Đạp Xe <span class="glyphicon"></span>
									</label>
								</li>
							</ul>
						</li>
						<li class="nav-divider"></li>
						<li class="first-lvl">
							<label label-default="" class="tree-toggle nav-header orange">GIÁ <span
									class="caret caret-active"></span></label>
							<ul class="nav tree">
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="500-599k"
											hidden="">5000.000đ - 2.000.0000đ <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="600k"
											hidden="">2.000.000đ - 4.000.000đ <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="400-499k"
											hidden="">4.000.000đ - 6.000.000đ <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="300-399k"
											hidden="">&lt; 6.000.000đ <span class="glyphicon"></span>
									</label>
								</li>
							</ul>
						</li>

						<li class="nav-divider"></li>
						<li class="first-lvl">
							<label label-default="" class="tree-toggle nav-header orange">CHẤT LIỆU <span
									class="caret caret-active"></span></label>
							<ul class="nav tree">
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Da lộn"
											hidden="">Da Lộn <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Da Nubuck"
											hidden="">Da Nubuck <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Da thuộc"
											hidden="">Da Thuộc <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Da tổng hợp"
											hidden="">Da tổng hợp <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Da Shellac"
											hidden="">Da Shellac <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Vải canvas"
											hidden="">Vải canvas <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Vải Jeans |Denim"
											hidden="">Vải Jeans |Denim <span class="glyphicon"></span>
									</label>
								</li>
								<li>
									<label>
										<input name="cbStatus" class="cb-item" type="checkbox" value="Vải lưới"
											hidden="">Vải Lưới <span class="glyphicon"></span>
									</label>
								</li>

							</ul>
						</li>
						<li class="nav-divider"></li>
						<li class="first-lvl">
							<label label-default="" class="tree-toggle nav-header orange">SIZE GIÀY <span
									class="caret caret-active"></span></label>
							<ul class="nav tree">
								<li class="cb-size">
									<label>
										<input name="cbSize" type="checkbox" value="35" hidden="">35</label>
									<label>
										<input name="cbSize" type="checkbox" value="36" hidden="">36</label>
									<label>
										<input name="cbSize" type="checkbox" value="37" hidden="">37</label>
									<label>
										<input name="cbSize" type="checkbox" value="38" hidden="">38</label>
									<label>
										<input name="cbSize" type="checkbox" value="39" hidden="">39</label>
									<label>
										<input name="cbSize" type="checkbox" value="40" hidden="">40</label>
									<label>
										<input name="cbSize" type="checkbox" value="41" hidden="">41</label>
									<label>
										<input name="cbSize" type="checkbox" value="42" hidden="">42</label>
									<label>
										<input name="cbSize" type="checkbox" value="43" hidden="">43</label>
									<label>
										<input name="cbSize" type="checkbox" value="44" hidden="">44</label>
									<label>
										<input name="cbSize" type="checkbox" value="45" hidden="">45</label>
									<label>
										<input name="cbSize" type="checkbox" value="46" hidden="">46</label>

								</li>
							</ul>
						</li>
						<li class="nav-divider"></li>
						<li class="first-lvl">
							<label label-default="" class="tree-toggle nav-header orange">MÀU SẮC <span
									class="caret caret-active"></span></label>
							<ul class="nav tree">
								<li class="cb-color">
									<label><span class="bg-color" style="background-color: #fefbef;"></span>
										<input name="cbColor" type="checkbox" value="offwhite" hidden=""></label>
									<label><span class="bg-color" style="background-color: #455851;"></span>
										<input name="cbColor" type="checkbox" value="pineneedle" hidden=""></label>
									<label><span class="bg-color" style="background-color: #ebd0a2;"></span>
										<input name="cbColor" type="checkbox" value="beige" hidden=""></label>
									<label><span class="bg-color" style="background-color: #c3c3c3;"></span>
										<input name="cbColor" type="checkbox" value="grey" hidden=""></label>
									<label><span class="bg-color" style="background-color: #1c487c;"></span>
										<input name="cbColor" type="checkbox" value="navy" hidden=""></label>
									<label><span class="bg-color" style="background-color: #865439;"></span>
										<input name="cbColor" type="checkbox" value="brown" hidden=""></label>
									<label><span class="bg-color" style="background-color: #ffffff;"></span>
										<input name="cbColor" type="checkbox" value="white" hidden=""></label>
									<label><span class="bg-color" style="background-color: #6d9951;"></span>
										<input name="cbColor" type="checkbox" value="green" hidden=""></label>
									<label><span class="bg-color" style="background-color: #8a5ca0;"></span>
										<input name="cbColor" type="checkbox" value="violet" hidden=""></label>
									<label><span class="bg-color" style="background-color: #f1778a;"></span>
										<input name="cbColor" type="checkbox" value="pink" hidden=""></label>
									<label><span class="bg-color" style="background-color: #f5d255;"></span>
										<input name="cbColor" type="checkbox" value="yellow" hidden=""></label>
									<label><span class="bg-color" style="background-color: #e9662c;"></span>
										<input name="cbColor" type="checkbox" value="orange" hidden=""></label>
									<label><span class="bg-color" style="background-color: #c10013;"></span>
										<input name="cbColor" type="checkbox" value="red" hidden=""></label>
									<label><span class="bg-color" style="background-color: #464646;"></span>
										<input name="cbColor" type="checkbox" value="black" hidden=""></label>
								</li>
							</ul>
						</li>
						<li class="nav-divider"></li>
					</ul>
				</div>
			</div>
			<!-- END FILTER ON PC VERSION (will be hidden on mobile)-->

			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 prd1-right">
				<!-- PC -->
				<div class="row prd1-right-box hidden-xs hidden-sm">
					<img src="images/shop-banner.png">
				</div>
				<!-- End PC -->

				<!-- Mobile -->
				<div class="row prd1-right-box-mobile visible-xs visible-sm">
					<img src="images/shop-banner.png">
				</div>
				<!-- End Mobile -->

				<!-- FILTER ON MOBILE VERSION -->
				<div class="row filter-mobile visible-xs visible-sm">
					<div class="title-main">
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" data-id="men,women" class="active"><a href="#mb_all" role="tab"
									data-toggle="tab">TẤT CẢ</a></li>
							<div class="divider"></div>
							<li role="presentation" data-id="men" class=""><a href="#mb_men" role="tab"
									data-toggle="tab">NAM</a></li>
							<div class="divider"></div>
							<li role="presentation" data-id="women" class=""><a href="#mb_women" role="tab"
									data-toggle="tab">NỮ</a></li>
						</ul>
					</div>

					<div class="tab">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs mb-category">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane " id="mb_men">
									<li class="" data-id="accessories"><a href="#accessories">Accessories | Phụ kiện</a>
									</li>
									<div class="divider"></div>
									<li class="" data-id="shoes"><a href="#shoes">Footwear | Lên chân</a></li>
									<div class="divider"></div>
									<li class="" data-id="top"><a href="#top">Top | Nửa trên</a></li>
								</div>
								<div role="tabpanel" class="tab-pane " id="mb_women">
									<li class="" data-id="accessories"><a href="#accessories">Accessories | Phụ kiện</a>
									</li>
									<div class="divider"></div>
									<li class="" data-id="shoes"><a href="#shoes">Footwear | Lên chân</a></li>
									<div class="divider"></div>
									<li class="" data-id="top"><a href="#top">Top | Nửa trên</a></li>
								</div>
								<div role="tabpanel" class="tab-pane active" id="mb_all">
									<li class="" data-id="accessories"><a href="#accessories">Accessories | Phụ kiện</a>
									</li>
									<div class="divider"></div>
									<li class="" data-id="shoes"><a href="#shoes">Footwear | Lên chân</a></li>
									<div class="divider"></div>
									<li class="" data-id="top"><a href="#top">Top | Nửa trên</a></li>
								</div>
							</div>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content tabs">

							<!-- Content Section1 -->
							<div class="tab-pane fade in active">
								<div class="col-xs-6 col-sm-6 option collapsed" data-target="#option1"
									data-toggle="collapse">
									TÙY CHỌN <span class="caret"></span>
								</div>
								<div class="col-xs-6 col-sm-6 txt-countproduct">200 Sản phẩm</div>
								<div class="col-xs-12 col-sm-12">
									<div id="option1" class="collapse left-tree-mobile">
										<ul class="nav">
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">TRẠNG
													THÁI<span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Sản Phẩm Mới" hidden="">Sản Phẩm Mới <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Hot" hidden="">Hot <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Giảm Giá" hidden="">Giảm Giá <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="new-arrival" hidden="">New Arrival <span
																class="glyphicon"></span>
														</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">KIỂU
													DÁNG<span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Cổ cao" hidden="">Cổ cao <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Cổ trung" hidden="">Cổ trung <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Cổ thấp" hidden="">Cổ thấp <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Đế cao" hidden="">Đế cao <span
																class="glyphicon"></span>
														</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">DÒNG SẢN
													PHẨM<span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Thời Trang" hidden="">Thời Trang <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Bóng Đá" hidden="">Bóng Đá <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Tennis" hidden="">Tennis <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Bóng Rổ" hidden="">Bóng Rổ <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="Chạy Bộ" hidden="">Chạy Bộ <span
																class="glyphicon"></span>
														</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">GIÁ<span
														class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="500-599k" hidden="">500k - 599k <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="600k" hidden="">&gt; 600k <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="400-499k" hidden="">400k - 499k <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="300-399k" hidden="">300k - 399k <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="200-299k" hidden="">200k - 299k <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="200k-range-price" hidden="">&lt; 200k <span
																class="glyphicon"></span>
														</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">BỘ SƯU
													TẬP<span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="jazico" hidden="">Jazico <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="track-6-isee" hidden="">Track 6 I.S.E.E <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="soda-pop" hidden="">Soda Pop <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="landforms" hidden="">Landforms <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="solid-colors" hidden="">SC <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="ananas-copy-store-bag" hidden="">Ananas "Copy"
															Store Bag <span class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="workaday" hidden="">Workaday <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="evergreen-pack" hidden="">Evergreen <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="raw" hidden="">RAW <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="polka-dots" hidden="">Polka Dots <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="living-journey" hidden="">Living Journey <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="retrospective" hidden="">Retrospective <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="aunter" hidden="">Aunter <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="monoguso" hidden="">Monoguso <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="ruler" hidden="">Ruler <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="flannel-pack" hidden="">Flannel <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="track-6-class-e" hidden="">Track 6 Class E <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="loveplus" hidden="">Love+ <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="temperate" hidden="">Temperate <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="ananas-doraemon-50years" hidden="">Ananas x
															Doraemon 50 Years <span class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="irrelevant" hidden="">Irrelevant <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="track-6-unnamed" hidden="">Track 6 Unnamed <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="discoveryou" hidden="">DiscoverYou <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="ananas-cropped-symbol" hidden="">Ananas Cropped
															Symbol <span class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="ananas-typo-logo" hidden="">Ananas Typo Logo
															<span class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="track-6-og" hidden="">Track 6 OG <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="bst-unsettling" hidden="">Unsettling <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="all-suede" hidden="">Track 6 Suede <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="corluray" hidden="">Corluray <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="bloody" hidden="">Bloody <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="lego" hidden="">Lego <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="the-gang" hidden="">The Gang <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="mister" hidden="">Mister <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="saigon-1980s" hidden="">Saigon 1980s <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="bleached-sand-pack" hidden="">Bleached Sand <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="mono" hidden="">Mono <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="simple-life" hidden="">Simple Life <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="mono-black" hidden="">Mono Black <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="hook-n-loop" hidden="">Hook n' Loop <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="bumper-gum" hidden="">Bumper Gum <span
																class="glyphicon"></span>
														</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<!-- Content Size-->
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">SIZE SẢN
													PHẨM KHÁC <span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li class="cb-size">

														<label><input name="cbSize" type="checkbox" value="s"
																hidden="">S</label>
														<label><input name="cbSize" type="checkbox" value="m"
																hidden="">M</label>
														<label><input name="cbSize" type="checkbox" value="l"
																hidden="">L</label>
														<label><input name="cbSize" type="checkbox" value="xl"
																hidden="">XL</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">CHẤT
													LIỆU<span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="canvas" hidden="">Canvas <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="suede" hidden="">Suede | Da lộn <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="pu" hidden="">Synthetic Leather <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="leather" hidden="">Leather | Da <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="cotton" hidden="">Cotton <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="flannel" hidden="">Flannel <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="acrylic" hidden="">Acrylic <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="corduroy" hidden="">Corduroy <span
																class="glyphicon"></span>
														</label>
													</li>
													<li>
														<label>
															<input name="cbStatus" class="cb-item" type="checkbox"
																value="polyester" hidden="">Polyester <span
																class="glyphicon"></span>
														</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<!-- Content Size-->
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">SIZE GIÀY
													<span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li class="cb-size">
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">35</label>
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">36</label>
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">37</label>
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">38</label>
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">39</label>
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">40</label>
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">41</label>
														<label><input name="cbSize" type="checkbox" value="35"
																hidden="">42</label>
													</li>
												</ul>
											</li>
											<li class="nav-divider"></li>
											<!-- Content Color -->
											<li class="first-lvl">
												<label label-default="" class="tree-toggle nav-header orange">MÀU
													SẮC<span class="caret caret-active"></span></label>
												<ul class="nav tree">
													<li class="cb-color">
														<label><span class="bg-color"
																style="background-color: #fefbef;"></span><input
																name="cbColor" type="checkbox" value="offwhite"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #455851;"></span><input
																name="cbColor" type="checkbox" value="pineneedle"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #ebd0a2;"></span><input
																name="cbColor" type="checkbox" value="beige"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #c3c3c3;"></span><input
																name="cbColor" type="checkbox" value="grey"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #1c487c;"></span><input
																name="cbColor" type="checkbox" value="navy"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #865439;"></span><input
																name="cbColor" type="checkbox" value="brown"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #ffffff;"></span><input
																name="cbColor" type="checkbox" value="white"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #6d9951;"></span><input
																name="cbColor" type="checkbox" value="green"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #8a5ca0;"></span><input
																name="cbColor" type="checkbox" value="violet"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #f1778a;"></span><input
																name="cbColor" type="checkbox" value="pink"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #f5d255;"></span><input
																name="cbColor" type="checkbox" value="yellow"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #e9662c;"></span><input
																name="cbColor" type="checkbox" value="orange"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #c10013;"></span><input
																name="cbColor" type="checkbox" value="red"
																hidden=""></label>
														<label><span class="bg-color"
																style="background-color: #464646;"></span><input
																name="cbColor" type="checkbox" value="black"
																hidden=""></label>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 btn-clear fixed hidden">XÓA CHỌN</div>
								<div class="col-xs-6 col-sm-6 btn-filter fixed hidden">LỌC</div>
							</div>
							<!-- End Content Section1 -->

						</div>
					</div>
				</div> <!-- END FILTER ON MOBILE VERSION -->



				<div class="row prd1-right-items">
					<?php
					while ($row_pro = mysqli_fetch_array($query_pro)) {
						?>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 item">
							<div class="thumbnail">
								<div class="cont-item">
									<a href="">
										<img class="inormal" src="images/Giày/<?php echo $row_pro['HINH'] ?>">
									</a>
								</div>

								<div class="caption">
									<h3 class="type"></h3>
									<h3 class="type"></h3>
									<h3 class="type"></h3>
									</form>
									<h3 class='#'></h3>
									<h3 class="name"><a href="">
											<?php echo $row_pro['TENSP'] ?>
										</a>
									</h3>
									<h3 class="color">
										<?php echo $row_pro['MALOAI'] ?>
									</h3>
									<h3 class="price">
										<?php echo number_format($row_pro['GIASP'], 0, ',', '.') . ' VND' ?>
									</h3>
									<form method="POST" action="themgiohang.php?MASP=<?php echo $row_pro['MASP'] ?> ">
										<div class="card-footer d-flex justify-content-between bg-light border">
											<a href="detail.php<?php echo $row_pro['MASP'] ?>"
												class="btn btn-sm text-dark p-0">
												<i class="fa-regular fa-eye mr-1"></i> Chi tiết</a>
											<button name="themgiohang" value="Thêm giỏ hàng" class="themgiohang"><i
													class="fa fa-shopping-cart mr-1"></i>Thêm giỏ hàng</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php }
					?>

				</div>



			</div>
		</div>
	</div>
	<div class="gotop hidden-xs hidden-sm">
		<a href="#"><img src="images/gotop.png"></a>
	</div>
	<div class="text-center load-more-icon">
		<img src="images/loading.gif">
	</div>

	</div>
	<input type="hidden" value="1" class="isProductListPage">
	</div>
	</div>
	<!-- New Arrivals section end -->
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
						<h2 class="shop_text">Địa chỉ </h2>
						<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">85 , Huỳnh Thúc
								Kháng , Quận 1 , TP Hồ Chí Minh.</span></div>
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
							<input type="text" class="enter_email" placeholder="Đăng nhập  email" name="Name">
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