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
		 /* ----------------------r??sponsive--------------------------- */
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
    
    <title>Thanh To??n Tour</title>
</head>
<body>
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
				<a href="admincp/DangNhap.php">????ng Nh???p</a>
				<a href="admincp/DangKy.php">????ng K??</a>
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
  			//l???y th??ng tin t??? c??c form b???ng ph????ng th???c POST
  			$name = $_POST["name"];
  			$email = $_POST["email"];
 			$age = $_POST["age"];
  			$phone = $_POST["phone"];
			$diachi = $_POST["diachi"];
  			$songuoi = $_POST["songuoi"];
 			$ngaykhoihanh = $_POST["ngaykhoihanh"];
  			$yeucau = $_POST["yeucau"];
  			//Ki???m tra ??i???u ki???n b???t bu???c ?????i v???i c??c field kh??ng ???????c b??? tr???ng
			  if ($name == "" || $email == "" || $age == "" || $phone == "" || $diachi == "" || $songuoi == "" || $ngaykhoihanh == "" || $yeucau == "" ) {
				   echo "B???n vui l??ng nh???p ?????y ????? th??ng tin";
  			}else{
  					// Ki???m tra t??i kho???n ???? t???n t???i ch??a
  					$sql="select * from khachhang where name='$name'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt) > 0){
						echo "T??i kho???n ???? t???n t???i";
					}
					else{
						//th???c hi???n vi???c l??u tr??? d??? li???u v??o db
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
					    // th???c thi c??u $sql v???i bi???n conn l???y t??? file connection.php
   						mysqli_query($conn,$sql);
				   		echo "ch??c m???ng b???n ???? thanh to??n th??nh c??ng";
					}
									    
					
			  }
	}
	?>
	<form action="thanhtoan.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h1>Thanh to??n tour</h1></td>
			</tr>	
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><h2>H??? T??n :</h2></td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td><h2>Email :</h2></td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td><h2>Tu???i :</h2></td>
				<td><input type="text" id="age" name="age"></td>
			</tr>
			<tr>
				<td><h2>S??? ??i???n tho???i :</h2></td>
				<td><input type="number" id="phone" name="phone"></td>
			</tr>
			<tr>
				<td><h2>?????a ch??? :</h2></td>
				<td><input type="text" id="diachi" name="diachi"></td>
			</tr>
			<tr>
				<td><h2>S??? ng?????i tham gia tour :</h2></td>
				<td><input type="number" id="songuoi" name="songuoi"></td>
			</tr>
			<tr>
				<td><h2>Ng??y kh???i h??nh :</h2></td>
				<td><input type="text" id="ngaykhoihanh" name="ngaykhoihanh"></td>
			</tr>
			<tr>
				<td><h2>Y??u c???u :</h2></td>
				<td><input type="text" id="yeucau" name="yeucau"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit" name="btn_submit">Thanh to??n</button></td>
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
                        <li><h2>Starup Du l???ch</h2></li>
                        <li>C??ng ty c??? ph???n th????ng m???i d???ch v??? du l???ch</li>
                        <li>MST:000000000</li>
                        <li>Tr??? s???: 129 ???????ng s??? 123, Ph?????ng 16, Qu???n G?? V???p</li>
                        <li>??T:0354606097</li>
                        <li>Email:cskh@StarupCSKH.vn</li>
                    </ul>
                </div>
                <div class="contact-text-right row">
                    <ul>
                        <li><a><h2>Ch??nh s??ch v?? quy ?????nh chung</h2></a></li>
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