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
							<img src="assets/images/ginge/lgo.png" alt="">
						</div>
						<h1 class="main-heading">Leave The Recipe Books Behind with Ginge<span></span></h1>
						<p>No more sifting through countless recipes only to find you’re always one thing short on cocktail night. Ginge references what you have, and can tell you what you already can make, or help you explore!
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/ginge/bnrimg.png" alt="">
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
							<img src="assets/images/ginge/mobimg.png" alt="">
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
							<img src="assets/images/ginge/cnclsnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="cnt">
							<h3 class="main-heading"><span class="prplclr">Download</span> Our Mobile Application</h3>
							<p>This revolutionary mobile app helps you make delicious cocktails utilizing a first of its kind specialized AI, becoming your bar assistant who is not only there to help you find what to make based on your tastes, but also manages your inventory, and is there to help answer questions and shed some light into the exciting world of cocktails!
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