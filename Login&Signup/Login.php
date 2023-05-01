<?php session_start();
require_once('../admincp/config.php');


// Code for login 
echo ($_POST['login']);
if (isset($_POST['login'])) {
	$password = $_POST['password'];
	$dec_password = $password;
	$useremail = $_POST['email'];
	$ret = mysqli_query($conn, "SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
	$num = mysqli_fetch_array($ret);
	if ($num > 0) {
		$extra = "../Trangchu.php";
		$_SESSION['login'] = $_POST['email'];
		$_SESSION['id'] = $num['id'];
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header('Location: ' . $extra);
		exit();
	} else {
		echo "<script>alert('Invalid username or password');</script>";
		$extra = "Login.php";
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("header.php");
		//header("location:http://$host$uri/$extra");
		exit();
	}
}

?>
<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
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
									<h3 class="mb-4">Đăng nhập tài khoản</h3>
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
									<label class="label" for="name">Email</label>
									<input type="text" name="email" class="form-control" placeholder="Email" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="password" class="form-control" placeholder="password"
										required>
								</div>
								<div class="form-group">
									<button type="submit" name="login"
										class="form-control btn btn-primary rounded submit px-3">Đăng
										nhập</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Nhớ mật khẩu
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Quên mật khẩu</a>
									</div>
								</div>
							</form>
							<p class="text-center">Bạn không có tài khoản? <a data-toggle="tab" href="Login.php">Đăng
									ký</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="js/main.js"></script>

</body>

</html>