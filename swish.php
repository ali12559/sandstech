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
							<img src="assets/images/swish/lgo.png" alt="">
						</div>
						<h1 class="main-heading">Your New Best Friend On The Court!<span></span></h1>
						<p>Want to get better at basketball? Get the best out of yourself on the court with SWISH, the revolutionary app designed for every basketball player. Track your shots, monitor your progress, and step up your game. Experience technology meeting the hardwood, and gain valuable insights through extensive shot tracking and and monitoring.
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/swish/bnrimg.png" alt="">
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
							<img src="assets/images/swish/mobimg.png" alt="">
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
							<img src="assets/images/swish/cnclsnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="cnt">
							<h3 class="main-heading">Download the <span class="orngclr">SWISH </span> App Now!</h3>
							<p>SWISH is available on both iOS and Android platforms. It’s designed with an easy interface, which makes the app super easy and accessible for users of all skill levels. Plus, it’s scalable to accommodate future feature enhancements and user base expansion. And, we’ve implemented powerful security measures to safeguard your information.

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