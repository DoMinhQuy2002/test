<?php

session_start();

include_once("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tour Du Lịch</title>
    <style>
		* {
		  box-sizing: border-box;
		}
		
		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		  background-color: #f1f1f1;
		  padding: 0;
		  font-family: Arial;
		}
		/* --------------------Header---------------------- */
		.header_img{
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
		  top: 18.3%;
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
        /*--------------- Center website ---------------*/

		h1 {
			font-family:Brush Script MT;
			font-size: 50px;
			color: #3399FF;
			word-break: break-all;
		}
		
		h2{
			color: #0099FF;
		}
		
		h4{
			color: #00CCFF;
			font-size: 20px;
		}
		.row {
		  margin: 10px -16px;
		}
		
		p{
			color: #0099FF;
			font-size: 15px;
		}
		
		/*--------------- products ---------------*/
		products {
		  background-color: white;
		  padding: 10px;
		  width: 920px;
		}
		
		.products img{
			margin-left: 100px;
		}
		
		.products button{
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
		
		.products button:hover {
		  background-color: #0066FF;
		}
		
		.product button{
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
		

        /* -----------------footer---------------------- */
        .container {
			padding: 50px 50px;
			margin-top: 12500px;
		}

		.contact-backgroud{
			height: 230px;
			background-color:#98d6f0 ;
			border: 2px solid  #98d6f0;
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
</head>
<body>
    <header>
		<div class="header_img">
			<img src="../tourdulich/img/LOGO6.jpg" alt=""></div>
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
				<a href="../admincp/DangNhap.php">Đăng Nhập</a>
				<a href="../admincp/DangKy.php">Đăng Ký</a>
			 </div>
		</div>
    </header>
    <br>
<div class="body">	
<div class="products">

<?php

//current URL of the Page. cart_update.php redirects back to this URL

$current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

    

    $results = $mysqli->query("SELECT * FROM dulich ORDER BY id ASC");

    if ($results) {

        //output results from database

        while($obj = $results->fetch_object())

        {

            

            echo '<div class="product">';

            echo '<form method="post" action="cart_update.php">';

            echo '<div class="product-thumb"><img src="'.$obj->thumbnail.'"></div>';

            echo '<div class="product-content"><h1>'.$obj->title.'</h1>';

            echo '<div class="product-info"><h2>'.$currency.$obj->price.'</h2> <br><button class="add_to_cart">Add To Cart</button></div>';

            echo '</div>';

            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';

            echo '<input type="hidden" name="type" value="add" />';

            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';

            echo '</form>';

            echo '</div>';

        }
}

?>

</div>

<div class="shopping-cart">

<h2>Giỏ hàng của bạn</h2>

<?php

if(isset($_SESSION["dulich"]))

{

    $total = 0;

    echo '<ol>';

    foreach ($_SESSION["dulich"] as $cart_itm)

    {

        echo '<li class="cart-itm">';

        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';

        echo '<h1>'.$cart_itm["name"].'</h1>';

        echo '<div class="p-code"><h2>Khu vực :</h2> '.$cart_itm["code"].'</div>';

        echo '<div class="p-price"><h2>Giá tour :</h2>'.$currency.$cart_itm["price"].'</div>';

        echo '</li>';

        $subtotal = ($cart_itm["price"]);

        $total = ($total + $subtotal);

    }

    echo '</ol>';

    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php"><h4>Chi tiết</h4></a></span>';
	echo '<br>';
    echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'"><h4>Xóa giỏ hàng</h4></a></span>';

}else{

    echo '<p>Giỏ hàng trống</p>';

}

?>

</div>

<br>
<br>
<br>
<br>
<br>


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
	
	<script>
	filterSelection("all")
	function filterSelection(c) {
	  var x, i;
	  x = document.getElementsByClassName("column");
	  if (c == "all") c = "";
	  for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	  }
	}

	function w3AddClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	  }
	}

	function w3RemoveClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		  arr1.splice(arr1.indexOf(arr2[i]), 1);     
		}
	  }
	  element.className = arr1.join(" ");
	}


	// Add active class to the current button (highlight it)
	var btnContainer = document.getElementById("myBtnContainer");
	var btns = btnContainer.getElementsByClassName("btn");
	for (var i = 0; i < btns.length; i++) {
	  btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	  });
	}
	</script>
</body>
</html>