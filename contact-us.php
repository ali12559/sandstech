<!DOCTYPE html>
<html>
	<head>
		<title>Get In Touch - Manhattan Book Writing</title>
		<meta name="description" content="Need someone to write on your behalf? Reach out to us, and we'll deliver exceptional writing services that surpass expectations for your total satisfaction.">
		<link rel="canonical" href="https://manhattanbookwriting.com/contact-us" />
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
	<body class="inersrvce">
		<?php
			$header = $srcurl."header.php";
			include($header);
		?>
		<div class="cntct sec-pad">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
					<div class="col-md-6">
						<h1 class="main-heading">Have An App Idea?</h1>
						<p>Discuss with our experts and collaborate to make it a reality.</p>
						<ul>
							<li><a href="<?php echo $email;?>"><i class="fa-solid fa-envelope"></i> <?php echo $email;?></a></li>
							<li><a href="<?php echo $phone;?>"><i class="fa-solid fa-phone"></i> <?php echo $phone;?></a></li>
						</ul>
						<ul class="socl">
							<li><a href="https://pk.linkedin.com/company/sands-tech"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/sands_tech/"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="https://pk.linkedin.com/company/sands-tech"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<form enctype="multipart/form-data" id="contact-form" class="offr-frm" method="post" action="../thankyou/">
							<div class="row align-items-center justify-content-between ">
								<div class="col-md-12">
                                	<h3>We would love to hear from you!</h3>
									<div class="form-group brdr mt30">
										<label>name</label>
										<input class="form-control" name="contactname" type="text" required="" aria-required="true">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6">
									<div class="form-group">
										<label>email</label>
										<input class="form-control" name="contactemail" type="email" required="" aria-required="true">
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6">
									<div class="form-group">
										<label>phone *</label>
										<input class="form-control" name="contactphone" type="text" minlength="10" maxlength="10" onkeypress="if (!window.__cfRLUnblockHandlers) return false; return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )" required="">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>message</label>
										<textarea name="contactmsg"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group text-start">
										<button aria-label="Form Button" class="pinkbtn" name="lets started" type="submit">Let's Start</button>
									</div>
									<input type="hidden" name="contact-form" value="" />
									<input type="hidden" name="pageurlcf" id="pageurlcf" value="" />
									<input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
									<script>
									document.getElementById('pageurlcf').value = window.location.href;
									</script>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			$believe = $srcurl."believe.php";
			include($believe);
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