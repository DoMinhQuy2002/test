<?php
require_once ('db/dbhelper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Khám Phá Kỳ Quan Việt</title>
</head>
<body>
    <header>
		<div class="header_img">
			<img src="img/LOGO6.jpg" alt=""></div>
		</div>
		<div class="navbar">
			  <a href="index.php">Khám Phá Kỳ Quan Việt</a>
			  <a href="AboutUs.php">Về chúng tôi</a>
			<div class="dropdown">
			  <button class="dropbtn" onclick="myFunction()">Thanh Toán
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-content" id="myDropdown">
				<a href="tourdulich/TourDuLịch.php">Đặt Tour</a>
				<a href="khachsan/KháchSạn.php">Đặt Khách Sạn</a>
			  </div>
			</div>
			 <a href="liên_he.php">Liên Hệ</a>
			 <div class="topnav-right">
				<a href="admincp/DangNhap.php">Đăng Nhập</a>
				<a href="admincp/DangKy.php">Đăng Ký</a>
			 </div>
		</div>  
    </header>
	<div class="body">
		 <div id="slideshow">
		   <div class="slide-wrapper">
			 <div class="slide"><img src="img/halongbay.jpg" alt=""></div>
			 <div class="slide"><img src="img/da nang.jpg" alt=""></div>
			 <div class="slide"><img src="img/hoian01.jpg" alt=""> </div>
		   </div>
		 </div>
		<!-- -------------------tour1-------------------------- -->
		<div class="tour">
			<div class="container">
				<h1>Giới Thiệu Tour</h1>
				<br>
				<div class="tour-content row">	
				<?php
//Lay danh sach danh muc tu database
$sql= "SELECT * FROM tintucdulich";
$tintucdulichList = executeResult($sql);
$index = 1;
foreach ($tintucdulichList as $item) {
		echo '<div class="tour-content-item row">';
		echo "<div class='tour-content-item-img'>
				<img src='".$item['thumbnail']."'>
		</div>";
		echo'<div class="tour-content-item-text">
						<h2>'.$item['title'].'</h2>
						<h3>'.$item['content'].'</h3>
					</div>
			</div>';
}
?>

				</div>
			</div>
		</div>
		<!-- -------------------tour2-------------------------- -->
		<div class="tour">
			<div class="container">
				<h1>Giới Thiệu Khách sạn</h1>
				<br>
				<div class="tour-content row">	
				<?php
//Lay danh sach danh muc tu database
$sql= "SELECT * FROM tintuckhachsan";
$tintuckhachsanList = executeResult($sql);
$index = 1;
foreach ($tintuckhachsanList as $item) {
		echo '<div class="tour-content-item row">
				<div class="tour-content-item-img">
					<img src='.$item['thumbnail'].'>
				</div>
			<div class="tour-content-item-text">
						<h2>'.$item['title'].'</h2>
						<h3>'.$item['content'].'</h3>
					</div>
			</div>';
}
?>

				</div>
			</div>
		</div>
		<!------------------------about------------------------- -->
		<section class="about">
			<div class="container">
				<h1>Dịch vụ</h1>
				<div class="about-content row">
					<div class="about-content-left">
						<img src="img/about.jpg" alt="">
					</div>
					<div class="about-content-right">
						<h2>Tại sao bạn nên chọn chúng tôi</h2>
						<h3>Chúng tôi là công ty hàng đầu về cung cấp dịch vụ lữ hành nội địa và quốc tế</h3>
						<h3>Chúng tôi có nhiều năm kinh nghiệm trong ngành và luôn duy trì nhưng dịch vụ tốt nhất </h3>
						<button><a href="AboutUs.php">Tìm hiểu thêm</a></button>
					</div>
				</div>
				<br>
				<div class="service row">
					<div class="service-item">
						<img src="img/hotel.png">
						<h2>Giá phòng rẻ</h2>
					</div>
					<div class="service-item">
						<img src="img/24-hours.png">
						<h2>Phục vụ 24/24</h2>
					</div>
					<div class="service-item">
						<img src="img/guide-book.png">
						<h2>Trả lời mọi thắc mắc</h2>
					</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			
		  <div class="column">
			<img src="img/dulichviet.png">
		  </div>
		  <div class="column">
			<img src="img/travel.jpg">
		  </div>
		  <div class="column">
			<img src="img/logo Hanoitourist-01.png">
		  </div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<!-- ----------------------------footer----------------------- -->
		<footer class="container">
			<div class="contact-backgroud row ">
					<div class="contact-text-left row">
						<ul>
							<li><h2>Starup Du lịch</h2></li>
							<li>Công ty cổ phần thương mại dịch vụ du lịch</li>
							<li>MST:000000000</li>
							<li>Trị sở: 129 đướng số 123, Phường 16, Quận Gò Vấp</li>
							<li>ĐT:0354606097</li>
							<li>Email:cskh@StarupCSKH.vn</li>
						</ul>
					</div>
					<div class="contact-text-right row">
						<ul>
							<li><h2>Chính sách và quy định chung</h2></li>
							<li><a>Khiếu nại & giải quyết khiếu nại</a></li>
							<li><a>Hình thức thanh toán</a></li>
							<li><a>Chính sách hoàn tiền</a></li>
							<li><a>Hướng đẫn đặt vé</a></li>
							<li><a>Bảo mật</a></li>
						</ul>
					</div>
			</div>
		</footer>
	</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>

</body>
</html>