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
	<body class="home case-study yoga-unity">
		<?php
			$header = $srcurl."header.php";
			include($header);
		?>
		<div class="cstbner sec-pad">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<h3 class="subhedng">E-Commerce</h3>
						<h1 class="main-heading ">TOP SHELF SUPPLEMENTS<span></span></h1>
						<p>TOP SHELF SUPPLEMENTS came to us with about $100,000 in TikTok Shop sales. They had solid products but weren't reaching their full potential on TikTok.
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/top-shelf-supplements/bnrimg.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="boxes ecomboxes sec-pad">
			<div class="container">
				<div class="row box-slider">
					<div class="col-lg-4 col-md-6">
						<div class="box">
							<h3>The Challenges
							</h3>
							<h5>Limited Reach:</h5>
							<p>Their content wasn't connecting with a wide audience.</p>
							<h5 class="mt30">No Affiliate Marketing: </h5>
							<p>They were missing out on influencer-driven sales</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="box">
							<h3>Our Approach
							</h3>
							<p>Affiliate Program: We set up a network of wellness influencers, giving them discount codes and engaging content to share.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="box">
							<h3>Content Overhaul
							</h3>
							<p>We created short, compelling videos that showcased real customer results, optimized ad targeting, and tied in with trending themes.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="visn ecomvisn">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="image">
							<img src="assets/images/top-shelf-supplements/visnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-7">
						<div class="wrp">
							<h3>The Results
							</h3>
							<p>In just 2 months, we took their sales from $100k to $400k. Now, they're generating $200,000 every week.
							</p>
						</div>
						<div class="wrp mt40">
							<h5>The Takeaway: 
							</h5>
							<p>With the right affiliate partnerships and fresh content, we helped TOPSHELFSUPPLE-MENTS achieve impressive, rapid growth on TikTok Shop.</p>
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