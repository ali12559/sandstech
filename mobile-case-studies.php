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
						<h1 class="main-heading">Case Studies.<span></span></h1>
						<h5>See how Sands has helped its clients achieve their vision of digital innovation</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="csstdy">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="mainwr top">
							<a href="<?php echo $path;?>glam-grid.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/casstdy/img1.png" alt="" src="<?php echo $basesurl;?>images/casstdy/img1.png" data-loaded="true">
								<div class="cntn">
									<h5>Glam Grid</h5>
									<p>Glam Grid, founded in London in 2010, has emerged as a trailblazer in the fashion technology industry. Boasting a premium shopping app and website...</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-5">
						<div class="mainwr top">
							<a href="<?php echo $path;?>moood.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/casstdy/img2.png" alt="" src="<?php echo $basesurl;?>images/casstdy/img2.png" data-loaded="true">
								<div class="cntn">
									<h5>Moood</h5>
									<p>MOOOD is a mobile application designed to be an operating system for the mind, offering users a transformative journey into mindfulness, meditation, and self-discovery...</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="row mt24">
					<div class="col-md-6">
						<div class="mainwr">
							<a href="<?php echo $path;?>yoga-unity.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/casstdy/img3.png" alt="" src="<?php echo $basesurl;?>images/casstdy/img3.png" data-loaded="true">
								<div class="cntn">
									<h5>Yoga unity</h5>
									<p>In the ever-evolving landscape of wellness and fitness, Yoga Unity stands as a beacon of transformation. Since its inception in 2008, Yoga Unity has emerged as the premier yoga...</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mainwr">
							<a href="<?php echo $path;?>bloom-rate.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/casstdy/img4.png" alt="" src="<?php echo $basesurl;?>images/casstdy/img4.png" data-loaded="true">
								<div class="cntn">
									<h5>Bloom Rate</h5>
									<p>In the ever-evolving landscape of wellness and fitness, Bloom Rate stands as a beacon of transformation. Since its inception in 2008, Bloom Rate has emerged as the premier yoga...</p>
								</div>
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