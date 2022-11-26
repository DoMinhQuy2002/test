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

			* {
			  box-sizing: border-box;
			}
        /* --------------------Header---------------------- */
			.header_img{
				overflow: hidden;
				position: fixed;
				top: 0%;
				width: 100%;
			}
			.header_img img{
				width:100%;
				height:140px;
			}
       /* --------------------topnav----------------------*/ 
		
		.navbar {
		  background-color: #0000CC;
		  font-family: Arial, Helvetica, sans-serif;
		  position: fixed;
		  top: 23.7%;
		  width: 100%;
		}

		.navbar a {
		  float: left;
		  font-size: 16px;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
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

		.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
		  background-color: #FF3300;
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
			text-align:center;
			margin-top: 160px;
			margin-left: 40px;
			display: -ms-flexbox; /* IE10 */
		    display: flex;
		    -ms-flex-wrap: wrap; /* IE10 */
		    flex-wrap: wrap;
			vertical-align: middle;
		}
		
		@media screen and (max-width: 800px) {
		  .body {
			-ms-flex: 90%;
			flex: 90%;
			max-width: 90%;
		  }
		}

		/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 600px) {
		  .body {
			-ms-flex: 100%;
			flex: 100%;
			max-width: 100%;
		  }
		}
        /*---------------row-------------*/
		.row {
		  display: -ms-flexbox; /* IE10 */
		  display: flex;
		  -ms-flex-wrap: wrap; /* IE10 */
		  flex-wrap: wrap;
		  margin: 0 -16px;
		  width: 1000px;
		}
		
		h1 {
			font-family:Brush Script MT;
			font-size: 50px;
			color: #3399FF;
			word-break: break-all;
			text-align: center;
		}
		
		h2{
			color: #0099FF;
		}
		
		.col-25 {
		  -ms-flex: 25%; /* IE10 */
		  flex: 25%;
		}

		.col-50 {
		  -ms-flex: 50%; /* IE10 */
		  flex: 50%;
		}

		.col-75 {
		  -ms-flex: 75%; /* IE10 */
		  flex: 75%;
		}

		.col-25,
		.col-50,
		.col-75 {
		  padding: 0 16px;
		}

		.container {
		  background-color: #f2f2f2;
		  padding: 5px 20px 15px 20px;
		  border: 1px solid lightgrey;
		  border-radius: 3px;
		}

		input {
		  width: 100%;
		  margin-bottom: 20px;
		  padding: 12px;
		  border: 1px solid #ccc;
		  border-radius: 3px;
		}
		
		button{
			  border: none;
			  outline: 0;
			  padding: 12px;
			  color: white;
			  background-color: #0000DD;
			  text-align: center;
			  cursor: pointer;
			  width: 100%;
			  font-size: 18px;
		}
		
		label {
		  margin-bottom: 10px;
		  display: block;
		}

		.icon-container {
		  margin-bottom: 20px;
		  padding: 7px 0;
		  font-size: 24px;
		}

		.btn {
		  background-color: #04AA6D;
		  color: white;
		  padding: 12px;
		  margin: 10px 0;
		  border: none;
		  width: 100%;
		  border-radius: 3px;
		  cursor: pointer;
		  font-size: 17px;
		}

		.btn:hover {
		  background-color: #45a049;
		}

		a {
		  color: #2196F3;
		}

		hr {
		  border: 1px solid lightgrey;
		}

		span.price {
		  float: right;
		  color: grey;
		}

		/*-------------- Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) ------------------*/
		@media (max-width: 800px) {
		  .row {
			flex-direction: column-reverse;
		  }
		  .col-25 {
			margin-bottom: 20px;
		  }
		}

		/* -----------------footer---------------------- */
        .container {
			padding: 50px 50px;
			margin-top: 50px;
		}

		.contact-backgroud{
			height: 230px;
			background-color:#98d6f0 ;
			border: 0px solid  #fff;
			align-items: center;
			text-align: center;
		}

		.contact-backgroud li{
			font-size: 15px;
			margin-top: 8px;
			color: white;
			font-family:var(--subtext);
			text-decoration: none;
			list-style: none;
		}

		.contact-text-left {
			float:left;
		}

		.contact-text-right{
			float:right;
		}
		 /* ----------------------résponsive--------------------------- */
        @media(max-width: 575px){
            .header-content{
                width: 100%;
            }

            .nice-plance{
                padding: 50px 0;
            }

            .nice-plance-item{
                width: 100%;
                margin-bottom: 20px;
                padding: 0 12px;
            }

            .about{
                padding: 50px 0;
            }

            .about-content-left{
                width: 100%;
            }

            .about-content-right{
                width: 100%;
                padding: 0 12px;
            }

            .service-item{
                width: 100%;
                margin-bottom: 20px;
                margin: 12px ;
            }

            .tour{
                padding: 50px;
            }

            .tour-content-item-img{
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
            }

            .tour-content-item-text{
                width: 100%;
                padding: 12px;
            }

            .review{
                padding: 30px 0;
            }

            .review-item{
                width: 100%;
                margin-bottom: 20px;
                margin: 12px;
            }
        }
        </style>
    
    <title>Thanh Toán Tour</title>
</head>
<body>
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
				<a href="admincp/DangNhap.php">Đăng Nhập</a>
				<a href="admincp/DangKy.php">Đăng Ký</a>
			 </div>
		</div>
    </header>
<div class="body">	
  <div class="row">  
	  <div class="col-75">
		<div class="container">
		  <?php
		require_once("lib/connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$name = $_POST["name"];
  			$email = $_POST["email"];
 			$age = $_POST["age"];
  			$phone = $_POST["phone"];
			$diachi = $_POST["diachi"];
  			$songuoi = $_POST["songuoi"];
 			$ngaykhoihanh = $_POST["ngaykhoihanh"];
  			$yeucau = $_POST["yeucau"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($name == "" || $email == "" || $age == "" || $phone == "" || $diachi == "" || $songuoi == "" || $ngaykhoihanh == "" || $yeucau == "" ) {
				   echo "Bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from khachhang where name='$name'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt) > 0){
						echo "Tài khoản đã tồn tại";
					}
					else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO khachhang(
	    					name,
	    					email,
	    					age,
						    phone,
							diachi,
	    					songuoi,
	    					ngaykhoihanh,
						    yeucau
	    					) VALUES (
	    					'$name',
	    					'$email',
						    '$age',
	    					'$phone',
							'$diachi',
	    					'$songuoi',
						    '$ngaykhoihanh',
	    					'$yeucau'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã thanh toán thành công";
					}
									    
					
			  }
	}
	?>
	<form action="thanhtoan.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h1>Thanh toán tour</h1></td>
			</tr>	
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><h2>Họ Tên :</h2></td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td><h2>Email :</h2></td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td><h2>Tuổi :</h2></td>
				<td><input type="text" id="age" name="age"></td>
			</tr>
			<tr>
				<td><h2>Số điện thoại :</h2></td>
				<td><input type="number" id="phone" name="phone"></td>
			</tr>
			<tr>
				<td><h2>Địa chỉ :</h2></td>
				<td><input type="text" id="diachi" name="diachi"></td>
			</tr>
			<tr>
				<td><h2>Số người tham gia tour :</h2></td>
				<td><input type="number" id="songuoi" name="songuoi"></td>
			</tr>
			<tr>
				<td><h2>Ngày khởi hành :</h2></td>
				<td><input type="text" id="ngaykhoihanh" name="ngaykhoihanh"></td>
			</tr>
			<tr>
				<td><h2>Yêu cầu :</h2></td>
				<td><input type="text" id="yeucau" name="yeucau"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit" name="btn_submit">Thanh toán</button></td>
			</tr>

		</table>

	</form>
		</div>
	  </div>
	</div>  
</div>
   <!-- -----------------------footer--------------------------- -->
    <footer class="container">
        <div class="contact-backgroud row ">
                <div class="contact-text-left row">
                    <ul>
                        <li><h2>Starup Du lịch</h2></li>
                        <li>Công ty cổ phần thương mại dịch vụ du lịch</li>
                        <li>MST:000000000</li>
                        <li>Trụ sở: 129 đướng số 123, Phường 16, Quận Gò Vấp</li>
                        <li>ĐT:0354606097</li>
                        <li>Email:cskh@StarupCSKH.vn</li>
                    </ul>
                </div>
                <div class="contact-text-right row">
                    <ul>
                        <li><a><h2>Chính sách và quy định chung</h2></a></li>
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