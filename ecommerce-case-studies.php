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
						<h3 class="subhedng">E-Commerce</h3>
						<h1 class="main-heading">Case Studies.<span></span></h1>
						<h5>See how Sands has helped its clients achieve their vision of digital innovation</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="csstdy ecmrce">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="mainwr top">
							<a href="<?php echo $path;?>bebodywise.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/ecommerce/img1.png" alt="" src="<?php echo $basesurl;?>images/ecommerce/img1.png" data-loaded="true">
								<div class="cntn">
									<h5>BEBODYWISE</h5>
									<p>When BEBODYWISE, a skincare and wellness brand, reached out to us, they were making about $200,000 on TikTok Shop. They had great products but hadn't fully tapped into TikTok's potential to reach a larger audience. We knew there was serious room for growth...</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-5">
						<div class="row">
							<div class="col-md-12">
								<div class="mainwr rht ">
									<a href="<?php echo $path;?>top-shelf-supplements.php">
										<img class="lazy " data-src="<?php echo $basesurl;?>images/ecommerce/img2.png" alt="" src="<?php echo $basesurl;?>images/ecommerce/img2.png" data-loaded="true">
										<div class="cntn">
											<h5>TOP SHELF SUPPLEMENTS</h5>
											<p>TOPSHELFSUPPLEMENTS came to us with about $100,000 in TikTok Shop sales. They had solid products...</p>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mainwr rht mt20">
									<a href="<?php echo $path;?>madrabbit.php">
										<img class="lazy " data-src="<?php echo $basesurl;?>images/ecommerce/img3.png" alt="" src="<?php echo $basesurl;?>images/ecommerce/img2.png" data-loaded="true">
										<div class="cntn">
											<h5>MADRABBIT</h5>
											<p>MADRABBIT, a tattoo-care brand known from Shark Tank and thriving on other e-commerce platforms...</p>
										</div>
									</a>
								</div>
							</div>
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