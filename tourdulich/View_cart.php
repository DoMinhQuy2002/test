<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Du lịch</title>
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
		/*--------------- Products ---------------*/
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
		.products {
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
	</style>
</head>
<body>
<div class="products">
<?php

session_start();

include_once("config.php");

    if(isset($_SESSION["dulich"]))

    {

        $total = 0;

        echo '<form method="post" action="PAYMENT-GATEWAY">';

        echo '<ul>';

        $cart_items = 0;

        foreach ($_SESSION["dulich"] as $cart_itm)

        {

           $product_code = $cart_itm["code"];

           $results = $mysqli->query("SELECT title,content, price FROM dulich WHERE product_code='$product_code' LIMIT 1");

           $obj = $results->fetch_object();

            

            echo '<li class="cart-itm">';

            echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';

            echo '<div class="p-price">'.$currency.$obj->price.'</div>';

            echo '<div class="product-info">';

            echo '<h3>'.$obj->title.' (Khu vực:'.$product_code.')</h3> ';

            echo ''.$obj->content.'';

            echo '</div>';

            echo '</li>';

            $subtotal = ($cart_itm["price"]);

            $total = ($total + $subtotal);



            echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->title.'" />';

            echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';

			
            $cart_items ++;

            

        }

        echo '</ul>';

        echo '<span class="check-out-txt">';

        echo '<a href="thanhtoan.php">Thanh toán</a> ';

        echo '</span>';

        echo '</form>';

        

    }else{

        echo 'Your Cart is empty';

    }

?>
</div>
</body>
</html>