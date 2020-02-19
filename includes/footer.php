
<?php
include("includes/dbcon.php");
?>

<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="cart.php"> Shopping Cart</a></li>
                            <li><a href="showroom.php"> Showroom</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
                <?php 
                $get_social = "select * from social_link";
                $run_social = mysqli_query($con, $get_social);
               $row_social= mysqli_fetch_array($run_social);
                   $fb = $row_social['facebook'];
                   $tweet = $row_social['twitter'];
                   $insta = $row_social['instagram'];
                   $whatsapp = $row_social['whatsapp'];
                   $email = $row_social['email'];


?>

					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="https://<?php echo $fb; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://<?php echo $tweet; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://<?php echo $insta; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://<?php echo $whatsapp; ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
							<li><a href="https://<?php echo $email; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2020 All Rights Reserverd. This template is modified with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="mailto:josephlagbalu@gmail.com">Joseey</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>