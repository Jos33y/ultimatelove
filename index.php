<?php
        include("includes/header.php");
?>  

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/slider_1.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Spring / Summer Collection 2020</h6>
						<h1>Get up to 30% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="showroom.php">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							 <?php

                                    $get_products = "select * from products  order by 1 DESC LIMIT 0,10";

                                    $run_products = mysqli_query($con, $get_products);

                                    while($row_products=mysqli_fetch_array($run_products)){

                                        $pro_id = $row_products['product_id'];

                                        $pro_title = $row_products['product_title'];

                                        $pro_price = $row_products['product_price'];

                                        $pro_img1 = $row_products['product_img1'];

                                        ?>                          

							<!-- Slides -->

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<a href="details.php?pro_id=<?php echo $pro_id; ?>">
											<img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="">
											</a>
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $pro_title; ?></a></h6>
											<div class="product_price">&#8358;<?php echo  $pro_price; ?></div>
										</div>
									</div>
								</div>								
							</div>
							<?php } ?>
						</div>				
						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div></div><!-- Banner -->

<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="banner_item align-items-center" style="background-image:url(images/banner_1.jpg)">
					<div class="banner_category">
						<a href="categories.html">women's</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner_item align-items-center" style="background-image:url(images/banner_2.jpg)">
					<div class="banner_category">
						<a href="categories.html">accessories's</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner_item align-items-center" style="background-image:url(images/banner_3.jpg)">
					<div class="banner_category">
						<a href="categories.html">men's</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	



	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							 <?php

                $get_p_cats = "select * from product_categories";

                $run_p_cats = mysqli_query($con, $get_p_cats);

                while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                    $p_cat_id = $row_p_cats['p_cat_id']; 

                    $p_cat_title = $row_p_cats['p_cat_title'];           
                ?>

							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".<?php echo $p_cat_id; ?>"> <?php echo $p_cat_title; ?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Products -->
 						<?php

                                    $get_products = "select * from products  order by 1 ASC LIMIT 0,20";

                                    $run_products = mysqli_query($con, $get_products);

                                    while($row_products=mysqli_fetch_array($run_products)){

                                        $pro_id = $row_products['product_id'];

                                        $pro_title = $row_products['product_title'];

                                        $pro_price = $row_products['product_price'];

										$pro_img1 = $row_products['product_img1'];

										$pro_label = $row_products['product_label'];
										
										$p_cat_id = $row_products['p_cat_id'];
                                      
										?>   
										
						<div class="product-item <?php echo $p_cat_id; ?>">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span><?php echo $pro_label; ?></span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $pro_title; ?></a></h6>
									<div class="product_price">&#8358;<?php echo $pro_price; ?></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="details.php?pro_id=<?php echo $pro_id; ?>">add to cart</a></div>
						</div>

						<?php } ?>

						</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php

include("includes/footer.php");

?>
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
