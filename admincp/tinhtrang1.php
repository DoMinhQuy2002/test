<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: DangNhap.php');
}
?>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
	<style>
		h1{
			color: #0033FF;
			background-color: #00FFFF;
			text-align: center;
		}
		ul{
			float:left;
		}
		ul li{
			list-style: none;
		}
		ul li a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h1>Chúc mừng bạn <?php echo $_SESSION['username'];  ?> đã đăng nhập thành công !</h1>
	<h2>Mời chọn nơi bạn muốn thay đổi</h2>
	<ul class="nav nav-tabs">
	  <li class="nav-item">
	    <a class="nav-link" href="../admincp/khachsan/index.php">Quản Lý Khách Sạn</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../admincp/dulich/index.php">Quản Lý Tour Du Lịch</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="../admincp/tintuc/index.php">Quản Lý Tour Tin tức</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="DangNhap.php">Quay Lại Đăng Nhập</a>
	  </li>
	</ul>
	
</body>
</html>