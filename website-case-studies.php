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
						<h3 class="subhedng">Website</h3>
						<h1 class="main-heading">Case Studies.<span></span></h1>
						<h5>See how Sands has helped its clients achieve their vision of digital innovation</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="webcstudy">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="mainwr top">
							<a href="<?php echo $path;?>agenci7.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/website/img1bg.png" alt="" src="<?php echo $basesurl;?>images/website/img1.png" data-loaded="true">
								<div class="cntn">
									<h5>Agenci7</h5>
									<p>When it aimed to expand its impact, it was already offering great services in website development, digital marketing, and media production. However, the agency wanted to maximize...</p>
								</div>
								<div class="imge">
									<img class="lazy " data-src="<?php echo $basesurl;?>images/website/img1.png" alt="" src="<?php echo $basesurl;?>images/website/img1.png" data-loaded="true">
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mainwr top">
							<a href="<?php echo $path;?>mbs-global.php">
								<img class="lazy " data-src="<?php echo $basesurl;?>images/website/img2bg.png" alt="" src="<?php echo $basesurl;?>images/website/img1.png" data-loaded="true">
								<div class="cntn">
									<h5>MBS Global</h5>
									<p>MBS Global Investments is a global investment leader that approached SandsTech. They needed a website that reflected their commitment and mission to revolutionize the global...</p>
								</div>
								<div class="imge">
									<img class="lazy " data-src="<?php echo $basesurl;?>images/website/img2.png" alt="" src="<?php echo $basesurl;?>images/website/img2.png" data-loaded="true">
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