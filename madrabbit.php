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
						<h1 class="main-heading ">MADRABBIT<span></span></h1>
						<p>MADRABBIT, a tattoo-care brand known from Shark Tank and thriving on other e-commerce platforms, launched on TikTok Shop six months ago. Despite their success elsewhere, their internal team struggled to drive strong sales on TikTok. That's when they reached out to us.
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/madrabbit/bnrimg.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="boxes ecomboxes sec-pad">
			<div class="container">
				<div class="row box-slider">
					<div class="col-md-12">
						<div class="box">
							<h3>Our Approach
							</h3>
							<p>When we took over the account, we made it our mission to create steady, sustainable growth from the ground up. Our focus was on building a strong foundation, starting with strategies that truly matter like connecting with influencers who align with your brand values and cultivating real, meaningful engagement with your audience. By prioritizing authentic relationships and community-building, we're not just increasing numbers; we're creating a loyal, engaged following that genuinely connects with your brand.</p>
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
							<img src="assets/images/madrabbit/visnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-7">
						<div class="wrp">
							<h3>The Results
							</h3>
							<p>In our first month, we generated $2,000 in sales, and the account is now making $1,000 weekly. The numbers keep climbing, and the client is excited by the potential we're unlocking on TikTok.
							</p>
						</div>
						<div class="wrp mt40">
							<h5>The Takeaway: 
							</h5>
							<p>By building solid groundwork, we're helping MADRABBIT grow steadily on TikTok Shop, with promising results and plenty of room to scale.</p>
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