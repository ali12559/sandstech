<!DOCTYPE html>
<html>
	<head>
		<title>sandstech</title>
		<meta name="description" content="sandstech">
		<link rel="canonical" href="" />
		<?php
			$srcurl = "includes/";
			$basesurl = "assets/";
			$urhere = "home";
		?>
		<?php
			$style = $srcurl."style.php";
			include_once($style);
		?>
	</head>
	<body class="home case-study yoga-unity ">
		<?php
			$header = $srcurl."header.php";
			include($header);
		?>
		<div class="cstbner prtflbnr sec-pad">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="lftimg">
							<img src="assets/images/athlinc/lgo.png" alt="">
						</div>
						<h1 class="main-heading">Your ultimate sports recruiting companion!<span></span></h1>
						<p>Athlinc is a platform built for athletes and sports recruits. No matter your background or experience, this is your chance to showcase your skills and gain recognition. We understand that the journey to success in sports can be challenging, which is why we bring the tools that empower athletes to navigate the athletic recruiting landscape with confidence. </p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/athlinc/bnrimg.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="secimg sec-pad">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="image">
							<img src="assets/images/athlinc/mobimg.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="cnclsn sec-pad prflocnclsn" style="background: transparent;">
			<div class="container">
				<div class="row align-items-center">
					
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/athlinc/cnclsnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="cnt">
							<h3 class="main-heading"><span class="bluclr">Download</span> Our Mobile Application</h3>
							<p>At Athlinc, we are passionate about connecting aspiring athletes with the opportunities they deserve. Our mission is to simplify the athletic recruiting process for athletes, coaches, and recruiters alike with our innovative mobile app that is designed to bridge the gap between potential and opportunity.
							</p>
							<ul >
								<li><a href="<?php echo $path;?>contact-us.php"><img src="assets/images/googleplay.png"></a></li>
								<li><a href="<?php echo $path;?>contact-us.php"><img src="assets/images/appstore.png"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			$map = $srcurl."map.php";
			include($map);
		?>
		
		<?php
			$footer = $srcurl."testi.php";
			include($footer);
		?>
		<?php
			$footer = $srcurl."cta.php";
			include($footer);
		?>
		<?php
			$footer = $srcurl."topftr.php";
			include($footer);
		?>
		<?php
			$footer = $srcurl."footer.php";
			include($footer);
		?>
	</body>
</html>