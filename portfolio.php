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
	<body class="home case-study">
		<?php
			$header = $srcurl."header.php";
			include($header);
		?>
		<div class="bner sec-pad">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-12">
						<h3 class="subhedng">Mobile Application</h3>
						<h1 class="main-heading">Portfolio<span></span></h1>
						<h5>Lorem ipsum dolor sit amet consectetur adipiscing elit odio, mattis quam.</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="prftlo">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="mainwr">
							<a href="<?php echo $path;?>swish.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/portfolio/img1.png" alt="" src="<?php echo $basesurl;?>images/portfolio/img1.png" data-loaded="true">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="mainwr">
							<a href="<?php echo $path;?>athlinc.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/portfolio/img2.png" alt="" src="<?php echo $basesurl;?>images/portfolio/img2.png" data-loaded="true">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="mainwr">
							<a href="<?php echo $path;?>cret.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/portfolio/img3.png" alt="" src="<?php echo $basesurl;?>images/portfolio/img3.png" data-loaded="true">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="mainwr ">
							<a href="<?php echo $path;?>cyerbi.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/portfolio/img4.png" alt="" src="<?php echo $basesurl;?>images/portfolio/img4.png" data-loaded="true">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="mainwr ">
							<a href="<?php echo $path;?>fittedup.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/portfolio/img55.png" alt="" src="<?php echo $basesurl;?>images/portfolio/img5.png" data-loaded="true">
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="mainwr ">
							<a href="<?php echo $path;?>ginge.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/portfolio/img6.png" alt="" src="<?php echo $basesurl;?>images/portfolio/img6.png" data-loaded="true">
							</a>
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
			$testi = $srcurl."testi.php";
			include($testi);
		?>
		<?php
			$cta = $srcurl."cta.php";
			include($cta);
		?>
		<?php
			$topftr = $srcurl."topftr.php";
			include($topftr);
		?>
		<?php
			$footer = $srcurl."footer.php";
			include($footer);
		?>
	</body>
</html>