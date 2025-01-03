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
						<h1 class="main-heading ">BEBODYWISE<span></span></h1>
						<p>When BEBODYWISE, a skincare and wellness brand, reached out to us, they were making about $200,000 on TikTok Shop. They had great products but hadn't fully tapped into TikTok's potential to reach a larger audience. We knew there was serious room for growth.
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/bebodywise/bnrimg.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="boxes ecomboxes sec-pad">
			<div class="container">
				<div class="row box-slider">
					<div class="col-md-6">
						<div class="box">
							<h3>The Challenges
							</h3>
							<h5>Low Visibility:</h5>
							<p>Their content wasn't grabbing attention or engaging people.</p>
							<h5 class="mt30">No Affiliate Marketing: </h5>
							<p>They hadn't built a network of influencers or affiliates, which could've been huge for their sales.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box">
							<h3>What We Did
							</h3>
							<p>Affiliate Program: We created an affiliate network with influencers who could introduce BEBODYWISE to the right audience. We made it easy for them by offering discount codes and ready-made content. • Content Makeover: We ramped up their TikTok presence with short, impactful videos, targeted ad spending, and promotions that lined up with TikTok trends.</p>
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
							<img src="assets/images/bebodywise/visnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-7">
						<div class="wrp">
							<h3>The Results
							</h3>
							<p>Within 4-5 months, sales shot up from $200k to $4 million. BEBODYWISE saw a major boost in visibility and engagement, with customers who not only bought once but came back for more.
							</p>
						</div>
						<div class="wrp mt40">
							<h5>The Takeaway: 
							</h5>
							<p>With the right mix of affiliates and engaging content, BEBODYWISE transformed from a steady performer into a major TikTok success.</p>
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