<!DOCTYPE html>
<html>
<head>

<title>Thank You | Novella Publishers</title>
<meta name="description" content="Novella Publishers"/>

<?php
    $srcurl = "includes/";
    $basesurl = "assets/";
    $urhere = "none";
?>

<?php
    $style = $srcurl."style.php"; 
    include_once($style); 
?>

</head>
<body class="thankyou-pg">

<section class="thankyou-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="/">
                    <img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="<?php echo $basesurl;?>images/logo.png" alt="*" width="auto" height="auto"/>
                </a>
            </div>
            <div class="col-md-12">
                <h1>Thank You!</h1>
                <p>Thank you for filling in your information. One of our account managers will get back to you shortly. Feel free to get in touch with us at any time.</p>
                <ul class="btn-wrap d-flex">
                    <li><a href="/" class="btn-size btn-purple">Homepage</a> </li>
                    <li><a href="tel:<?php echo $phone;?>" class="btn-size btn-pink">Call Us</a> </li>
                    <li><a href="javascript:void(Tawk_API.toggle())" class="chat btn-size btn-purple">Live Chat</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
$footer = $srcurl."footer.php"; 
include($footer); 
?>

</body>
</html>