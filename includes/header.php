<?php

session_start();
if(isset($_SESSION['customer_email'])){
  
$customer_email = $_SESSION['customer_email'];

}

include("includes/dbcon.php");
include("functions/functions.php");

?>

<?php


if(isset($_GET['pro_id'])){

    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";

    $run_product = mysqli_query($con, $get_product);

    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];

    $pro_title = $row_product['product_title'];

    $pro_price = $row_product['product_price'];

    $pro_desc = $row_product['product_desc'];

    $pro_img1 = $row_product['product_img1'];

    $pro_img2 = $row_product['product_img2'];

    $pro_img3 = $row_product['product_img3'];

    $get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id'";

    $run_p_cat = mysqli_query($con, $get_p_cat);

    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];

    $p_size = $row_p_cat['size_id'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>ultimate love</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">
		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">ultimate<span>love</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.php">home</a></li>
                <li><a href="showroom.php">showroom</a></li>
                 <?php        
                    if(!isset($_SESSION['customer_email'])){

                        echo  "<li><a href='customer/my_account.php'>my account</a></li>";
                    }else{
                        echo "<li><a href='customer/my_account.php?my_orders'>my account</a></li>";                   
                    }

               ?>
	
								<li><a href="contact.php">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="cart.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items"><?php items(); ?></span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
          <?php 
                
                if(!isset($customer_email)){
                    echo  "<li><a href='customer_login.php'><i class='fa fa-sign-in' aria-hidden='true'></i>Sign In</a></li>
                    <li><a href='customer_register.php'><i class='fa fa-user-plus' aria-hidden='true'></i>Register</a></li>";
                  }else{
                    echo "
                    <li><a href='logout.php'><i class='fa fa-sign-in' aria-hidden='true'></i>Log Out</a></li>";
       
                }
                
               ?>
					</ul>
				</li>
				<li class="menu_item"><a href="index.php">home</a></li>
				<li class="menu_item"><a href="showroom.php">showroom</a></li>
        <?php        
               if(!isset($_SESSION['customer_email'])){

                   echo  "<li class='menu_item'><a href='customer/my_account.php'>my account</a></li>";
              }else{
                   echo "<li class='menu_item'><a href='customer/my_account.php?my_orders'>my account</a></li>";                   
              }

               ?>
				<li class="menu_item"><a href="contact.php">contact</a></li>
			</ul>
		</div>
	</div>
