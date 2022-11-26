<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/dangnhap.css">
    
    <title>Đăng Nhập</title>
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
				<a href="DangNhap.php">Đăng Nhập</a>
				<a href="DangKy.php">Đăng Ký</a>
			 </div>
		</div>
    </header>
<div class="body">
    <div class="bg-img">
	  <form action="/action_page.php" class="container">
		<h1>Đăng nhập</h1>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Nhập Email" name="email" required>

		<label for="psw"><b>Mật khẩu</b></label>
		<input type="password" placeholder="Nhập mật khẩu" name="psw" required>

		<button type="submit" class="btn">Đăng nhập</button>
	  </form>
	</div>
</div>
    <footer class="F1">
            <div class="F2 ">
                    <div class="F3">
                        <ul>
                            <li><h2>Starup Du lịch</h2></li>
                            <li>Công ty cổ phần thương mại dịch vụ du lịch</li>
                            <li>MST:000000000</li>
                            <li>Trụ sở: 129 đướng số 123, Phường 16, Quận Gò Vấp</li>
                            <li>ĐT:0354606097</li>
                            <li>Email:cskh@StarupCSKH.vn</li>
                        </ul>
                    </div>
                    <div class="F4">
                        <ul>
                            <li><a><h1>Chính sách và quy định chung</h1></a></li>
                            <li><a>Khiếu nại & giải quyết khiếu nại</a></li>
                            <li><a>Hình thức thanh toán</a></li>
                            <li><a>Chính sách hoàn tiền</a></li>
                            <li><a>Hướng đẫn đặt vé</a></li>
                            <li>Bảo mật</li>
                        </ul>
                    </div>
            </div>
        </footer>
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