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
							<img src="assets/images/cyerbi/lgo.png" alt="">
						</div>
						<h1 class="main-heading">A New Way to Connect in the World of Fitness<span></span></h1>
						<p>An all-round fitness platform designed to help you track your fitness goals, connect with like-minded fitness enthusiasts, and collaborate with trainers for personalized guidance.
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/cyerbi/bnrimg.png" alt="">
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
							<img src="assets/images/cyerbi/mobimg.png" alt="">
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
							<img src="assets/images/cyerbi/cnclsnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="cnt">
							<h3 class="main-heading"><span class="pknclr">Download</span> Our Mobile Application</h3>
							<p>Welcome to Cyerbi, where we believe fitness is more than just a personal routine. To us, it's a shared experience. Our mission is to create an all-round fitness platform that helps you track your progress and connects you with a lively community of like-minded people and dedicated trainers.
							<br></br>
							We know the challenges of maintaining motivation and finding support along your fitness journey. That’s why we’ve designed our platform to empower you through features that facilitate social connections, support collaboration, and provide personalized guidance.
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