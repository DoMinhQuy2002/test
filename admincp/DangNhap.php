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
    
    <title>????ng Nh???p</title>
</head>
<body>
<?php
	//G???i file connection.php ??? b??i tr?????c
	require_once("lib/connection.php");
	// Ki???m tra n???u ng?????i d??ng ???? ??n n??t ????ng nh???p th?? m???i x??? l??
	if (isset($_POST["btn_submit"])) {
		// l???y th??ng tin ng?????i d??ng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//l??m s???ch th??ng tin, x??a b??? c??c tag html, k?? t??? ?????c bi???t 
		//m?? ng?????i d??ng c??? t??nh th??m v??o ????? t???n c??ng theo ph????ng th???c sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username ho???c password b???n kh??ng ???????c ????? tr???ng!";
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
				//ti???n h??nh l??u t??n ????ng nh???p v??o session ????? ti???n x??? l?? sau n??y
				$_SESSION['username'] = $username;
                // Th???c thi h??nh ?????ng sau khi l??u th??ng tin v??o session
                // ??? ????y m??nh ti???n h??nh chuy???n h?????ng trang web t???i m???t trang g???i l?? tinhtrang.php
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
			  <a href="../index.php">Kh??m Ph?? K??? Quan Vi???t</a>
			  <a href="../AboutUs.php">V??? ch??ng t??i</a>
			<div class="dropdown">
			  <button class="dropbtn" onclick="myFunction()">Thanh To??n
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-content" id="myDropdown">
				<a href="../tourdulich/TourDuL???ch.php">?????t Tour</a>
				<a href="../khachsan/Kh??chS???n.php">?????t Kh??ch S???n</a>
			  </div>
			</div>
			 <a href="../li??n_he.php">Li??n H???</a>
			 <div class="topnav-right">
				<a href="../DangNhap.php">????ng Nh???p</a>
				<a href="../DangKy.php">????ng K??</a>
			 </div>
		</div> 
    </header>
<div class="body">
    <div class="bg-img">
	  <form action="DangNhap.php" method="POST" class="container">
		<h1>????ng nh???p</h1>

		<label for="username"><b>T??n t??i kho???n</b></label>
		<input type="text" placeholder="Nh???p username" name="username" required>

		<label for="password"><b>M???t kh???u</b></label>
		<input type="password" placeholder="Nh???p m???t kh???u" name="password" required>

		<button type="submit" class="btn" name="btn_submit">????ng nh???p</button>
	  </form>
	</div>
</div>
    <footer class="F1">
            <div class="F2 ">
                    <div class="F3">
                        <ul>
                            <li><h2>Starup Du l???ch</h2></li>
                            <li>C??ng ty c??? ph???n th????ng m???i d???ch v??? du l???ch</li>
                            <li>MST:000000000</li>
                            <li>Tr??? s???: 129 ???????ng s??? 123, Ph?????ng 16, Qu???n G?? V???p</li>
                            <li>??T:0354606097</li>
                            <li>Email:cskh@StarupCSKH.vn</li>
                        </ul>
                    </div>
                    <div class="F4">
                        <ul>
                            <li><a><h1>Ch??nh s??ch v?? quy ?????nh chung</h1></a></li>
                            <li><a>Khi???u n???i & gi???i quy???t khi???u n???i</a></li>
                            <li><a>H??nh th???c thanh to??n</a></li>
                            <li><a>Ch??nh s??ch ho??n ti???n</a></li>
                            <li><a>H?????ng ?????n ?????t v??</a></li>
                            <li>B???o m???t</li>
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