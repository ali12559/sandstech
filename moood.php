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
						<h3 class="subhedng">Mobile Application</h3>
						<h1 class="main-heading low">moood<span></span></h1>
						<p>Mood is a mobile application designed to be an operating system for the mind, offering users a transformative journey into mindfulness, meditation, and self-discovery. Developed by neuroscientist and author Sam Harris, the app combines ancient wisdom with modern science to provide a comprehensive and accessible approach to mindfulness.
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/moood/bnrimg.png" alt="">
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
							<img src="assets/images/moood/mobimg.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="visn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- <div class="head">
								<h1 class="main-heading">The Vision</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,</p>
						</div> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="image">
							<img src="assets/images/moood/visnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-7">
						<div class="wrp">
							<h3>Objective
							</h3>
							<p>The primary goal of Mood is to help users discover the true purpose of meditation, understand the theory of mindfulness, and live a more examined and fulfilling life. The app aims to be a hub for serious seekers, providing curated content, guided meditations, and thought-provoking conversations free from religious dogma.
							</p>
						</div>
						<div class="wrp mt50">
							<h3>Key Metrics
							</h3>
							<ul>
								<li>Over 8 million products can be discovered and purchased through the Lyst platform.
								</li>
								<li>The Lyst app holds the prestigious title of being the most downloaded premium fashion iOS app globally.
								</li>
								<li>Over 8 million products can be discovered and purchased through the Lyst platform.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="boxes sec-pad">
			<div class="container">
				<div class="row box-slider">
					<div class="col-md-6">
						<div class="box">
							<h3>Unique Selling Points
							</h3>
							<ul>
								<li>Inventory-Free Platform: Lyst operates on an inventory-free model, distinguishing itself from traditional e-commerce platforms. This allows the company to focus on providing a curated selection of products without the burden of managing physical stock.
								</li>
								<li>Proprietary Data Engine: Lyst leverages a proprietary data engine to deliver a highly personalized shopping experience to each customer. This technology enables the platform to understand user preferences, recommend tailored products, and enhance overall user satisfaction.
								</li>
								<li>Brand Portfolio: Lyst collaborates with a prestigious lineup of brands, including Balenciaga, Gucci, Prada, and more. This not only enriches the product offering but also adds a sense of exclusivity to the platform.</li>
								<li>Talent Mix: With a team comprising fashion enthusiasts, technologists, and data experts, Lyst embodies a fusion of creativity and technical expertise. Two-thirds of the talent pool are dedicated to engineering, science, and product development, highlighting the company's commitment to leveraging technology for customer and partner satisfaction.
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box">
							<h3>Impact
							</h3>
							<ul>
								<li>Customer Satisfaction: Lyst's commitment to delivering a personalized shopping experience has resonated with users globally, leading to over 160 million annual shoppers and making it the most downloaded premium fashion iOS app.
								</li>
								<li>Customer Satisfaction: Lyst's commitment to delivering a personalized shopping experience has resonated with users globally, leading to over 160 million annual shoppers and making it the most downloaded premium fashion iOS app.
								</li>
								<li>Industry Leadership: Lyst has become a key player in the fashion industry, not just as a retailer but also as a source of valuable insights. The Lyst Index, the industry-leading report on the hottest brands and products worldwide, establishes the company as an authority on fashion trends.
								</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="cnclsn sec-pad" style="background-image:url(assets/images/moood/cnclsnbg.png);background-size: cover;background-repeat: no-repeat;background-position: bottom;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="cnt">
							<h3 class="main-heading">Conclusion</h3>
							<p>Lyst's journey from its inception in 2010 to becoming a global fashion technology leader is a testament to its innovative approach, commitment to customer satisfaction, and strategic partnerships with renowned brands. As the fashion industry continues to evolve, Lyst remains at the forefront, leveraging technology to shape the future of online retail.
							</p>
							<ul >
								<li><a href="<?php echo $path;?>contact-us.php"><img src="assets/images/googleplay.png"></a></li>
								<li><a href="<?php echo $path;?>contact-us.php"><img src="assets/images/appstore.png"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/moood/cnclsnimg.png" alt="">
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