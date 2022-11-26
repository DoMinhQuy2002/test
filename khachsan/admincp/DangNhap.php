<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body, html {
			  height: 100%;
			  font-family: Arial, Helvetica, sans-serif;
			}
          /* --------------------Header---------------------- */
		.header_img{
			overflow: hidden;
			position: fixed;
			top: 0%;
		}
		.header_img img{
			width:1100px;
			height:130px;
		}
       /* --------------------topnav----------------------*/ 
		
		.navbar {
		  background-color: #0000CC;
		  font-family: Arial, Helvetica, sans-serif;
		  top: 24%;
		  width: 99.7%;
		  position: fixed;
		}

		.navbar a {
		  float: left;
		  font-size: 16px;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}
		.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
		  background-color: #FF3300;
		}
		.dropdown {
		  float: left;
		  overflow: hidden;
		}

		.dropdown .dropbtn {
		  cursor: pointer;
		  font-size: 16px;  
		  border: none;
		  outline: none;
		  color: white;
		  padding: 14px 16px;
		  background-color: inherit;
		  font-family: inherit;
		  margin: 0;
		}
		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #0000CC;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  float: none;
		  color: white;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		.dropdown-content a:hover {
		  background-color: #FF3300;
		}

		.show {
		  display: block;
		}
		.topnav-right {
				  float: right;
		}
		/*---------------body-------------*/
		.body{
			margin-top: 175px;
		}
        .bg-img {
		  /* The image used */
		  background-image: url("https://media.vietravel.com/images/NewsPicture/tay-bac(7).jpg");

		  min-height: 480px;
		  width: 1100px;

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}

		/* Add styles to the form container */
		.container {
		  float:right;
		  margin: 20px;
		  max-width: 300px;
		  padding: 16px;
		  background-color: white;
		}

		/* Full-width input fields */
		input[type=text], input[type=password] {
		  width: 90%;
		  padding: 15px;
		  margin: 5px 0 22px 0;
		  border: none;
		  background: #f1f1f1;
		}

		input[type=text]:focus, input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		/* Set a style for the submit button */
		.btn {
		  background-color: #0000DD;
		  color: white;
		  padding: 16px 20px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		}

		.btn:hover {
		  opacity: 1;
		}

        .F1{
            background: #6DBFE2;
            width: 1100px;
            height: 250px;
            text-align: center;
        }
        .F1 ul{
            margin: 0px;
            padding: 0px;
        }
        .F1 ul li{
            list-style: none;
        }
        .F1 {
            padding-bottom:50px 50px;
        }
        .F2 li{
            margin-top: 8px;
            color: white;
        }

        .F1 {
            clear: both;
        }

        .F3 {
            float: left;
            width: 340px;
        }

        .F4 {
            float: right;
            width: 530px;
        }

       
        </style>
    
    <title>Đăng Nhập</title>
</head>
<body>
<?php
	//Gọi file connection.php ở bài trước
	require_once("lib/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}
		else
		{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				header('Location: tinhtrang1,1.php');
			}
			else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là tinhtrang.php
                header('Location: tinhtrang1.php');
			}
		}
	}
?>
    <header>
		<div class="header_img">
			<img src="img/LOGO6.jpg" alt=""></div>
		</div>
        <div class="navbar">
			  <a href="../index.php">Khám Phá Kỳ Quan Việt</a>
			  <a href="../AboutUs.php">Về chúng tôi</a>
			<div class="dropdown">
			  <button class="dropbtn" onclick="myFunction()">Thanh Toán
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-content" id="myDropdown">
				<a href="../tourdulich/TourDuLịch.php">Đặt Tour</a>
				<a href="../khachsan/KháchSạn.php">Đặt Khách Sạn</a>
			  </div>
			</div>
			 <a href="../liên_he.php">Liên Hệ</a>
			 <div class="topnav-right">
				<a href="../DangNhap.php">Đăng Nhập</a>
				<a href="../DangKy.php">Đăng Ký</a>
			 </div>
		</div> 
    </header>
<div class="body">
    <div class="bg-img">
	  <form action="DangNhap.php" method="POST" class="container">
		<h1>Đăng nhập</h1>

		<label for="username"><b>Tên tài khoản</b></label>
		<input type="text" placeholder="Nhập username" name="username" required>

		<label for="password"><b>Mật khẩu</b></label>
		<input type="password" placeholder="Nhập mật khẩu" name="password" required>

		<button type="submit" class="btn" name="btn_submit">Đăng nhập</button>
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