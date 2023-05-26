<?php session_start();
require_once('../admincp/config.php');


//Code for Registration
if (isset($_POST['signup'])) {
	$username = $_POST['tenkhachhang'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$diachi = $_POST['diachi'];
	$phone = $_POST['dienthoai'];
	$enc_password = $password;
	$sql = mysqli_query($conn, "select id_user from users where email='$email'");
	$row = mysqli_num_rows($sql);
	if ($row > 0) {
		echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
	} else {
		$msg = mysqli_query($conn, "insert into users(tenkhachhang,email,password,diachi,dienthoai) values('$username','$email','$enc_password','$diachi','$phone')");

		if ($msg) {
			echo "<script>alert('Register successfully');</script>";
		}
	}
	header('Location:Login.php');

}

?>

<!doctype html>
<html lang="en">

<head>
	<title>Sign up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/bg-1.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Đăng ký tài khoản</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-google"></span></a>
									</p>
								</div>
							</div>
							<form action="#" method="POST" class="signin-form">
								<div class="form-group mb-3">
									<label class="label" for="name">UserName</label>
									<input type="text" name="tenkhachhang" class="form-control" placeholder="UserName"
										required>
								</div>

								<div class="form-group mb-3">
									<label class="label" for="password">Email</label>
									<input type="email" name="email" class="form-control" placeholder="mail@example.com"
										required>
								</div>


								<div class="form-group mb-3">
									<label class="label" for="password">Mật khẩu</label>
									<input type="password" name="password" class="form-control" placeholder="Mật khẩu"
										required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Địa chỉ</label>
									<input type="text" name="diachi" class="form-control" placeholder="Địa chỉ"
										required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Điện Thoại</label>
									<input type="text" name="dienthoai" class="form-control" placeholder="phone"
										required>
								</div>

								<div class="form-group">
									<button type="submit" name="signup"
										class="form-control btn btn-primary rounded submit px-3">Đăng
										ký</button>
								</div>
								<p class="text-center">Bạn đã có tài khoản? <a data-toggle="tab" href="Login.php">Đăng
										nhập</a></p>
						</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<!--   <script src="js/bootstrap.min.js"></script> -->
	<script src="js/main.js"></script>

</body>

</html>