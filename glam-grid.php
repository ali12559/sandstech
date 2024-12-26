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
		<div class="cstbner sec-pad">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<h3 class="subhedng">Mobile Application</h3>
						<h1 class="main-heading">GLAM GRID<span></span></h1>
						<p>Glam Grid, founded in London in 2010, has emerged as a trailblazer in the fashion technology industry. Boasting a premium shopping app and website, the company caters to over 160 million annual shoppers, offering a vast array of products from 17,000 of the world's leading brands and stores.
						</p>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/glam-grid/bnrimg.png" alt="">
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
							<img src="assets/images/glam-grid/mobimg.png" alt="">
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
							<img src="assets/images/glam-grid/visnimg.png" alt="">
						</div>
					</div>
					<div class="col-md-7">
						<div class="wrp">
							<h3>Objective</h3>
							<p>Glam Grid's primary goal is to power success online for brands and stores while providing a highly personalized shopping experience for its users. With a commitment to delivering meaningful direct sales within a trusted brand environment, Glam Grid positions itself as a key player in the global fashion e-commerce landscape.
							</p>
						</div>
						<div class="wrp mt50">
							<h3>Key Metrics
							</h3>
							<ul>
								<li>Over 8 million products can be discovered and purchased through the Glam Grid platform.
								</li>
								<li>The Glam Grid app holds the prestigious title of being the most downloaded premium fashion iOS app globally.
								</li>
								<li>Over 8 million products can be discovered and purchased through the Glam Grid platform.
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
								<li>Inventory-Free Platform: Glam Grid operates on an inventory-free model, distinguishing itself from traditional e-commerce platforms. This allows the company to focus on providing a curated selection of products without the burden of managing physical stock.</li>
								<li>Proprietary Data Engine: Glam Grid leverages a proprietary data engine to deliver a highly personalized shopping experience to each customer. This technology enables the platform to understand user preferences, recommend tailored products, and enhance overall user satisfaction.
								</li>
								<li>Brand Portfolio: Glam Grid collaborates with a prestigious lineup of brands, including Balenciaga, Gucci, Prada, and more. This not only enriches the product offering but also adds a sense of exclusivity to the platform.
								</li>
								<li>Talent Mix: With a team comprising fashion enthusiasts, technologists, and data experts, Glam Grid embodies a fusion of creativity and technical expertise. Two-thirds of the talent pool are dedicated to engineering, science, and product development, highlighting the company's commitment to leveraging technology for customer and partner satisfaction.
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="box">
							<h3>Impact
							</h3>
							<ul>
								<li>Customer Satisfaction: Glam Grid's commitment to delivering a personalized shopping experience has resonated with users globally, leading to over 160 million annual shoppers and making it the most downloaded premium fashion iOS app.
								</li>
								<li>Financial Success: The platform's impressive Lifetime GMV exceeding $2 billion USD is indicative of its financial success. Glam Grid's ability to drive meaningful direct sales has contributed to its standing as a lucrative avenue for brands and stores.
								</li>
								<li>Industry Leadership: Glam Grid has become a key player in the fashion industry, not just as a retailer but also as a source of valuable insights. The Glam Grid Index, the industry-leading report on the hottest brands and products worldwide, establishes the company as an authority on fashion trends.
								</li>
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="cnclsn glmgrd sec-pad " style="background: transparent;">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="cnt">
							<h3 class="main-heading">Conclusion</h3>
							<p>Glam Grid's journey from its inception in 2010 to becoming a global fashion technology leader is a testament to its innovative approach, commitment to customer satisfaction, and strategic partnerships with renowned brands. As the fashion industry continues to evolve, Glam Grid remains at the forefront, leveraging technology to shape the future of online retail.
							</p>
							<ul >
								<li><a href="<?php echo $path;?>contact-us.php"><img src="assets/images/googleplay.png"></a></li>
								<li><a href="<?php echo $path;?>contact-us.php"><img src="assets/images/appstore.png"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="image">
							<img src="assets/images/glam-grid/cnclsnimg.png" alt="">
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