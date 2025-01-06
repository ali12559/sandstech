<?php
$title = "Thank You";
?>
<?php
// CTA Form
if (isset($_POST['banerform'])) {
    $from_email      = $_POST["em"]; // Use "em" instead of "email"
    $recipient_email = 'info@sandstech.org';
    $subject         = "sandstech | Banner Bottom Form";
    $sender_name     = filter_var($_POST["cn"], FILTER_SANITIZE_STRING);
    $reply_to_email  = filter_var($_POST["em"], FILTER_SANITIZE_STRING);
    $number          = filter_var($_POST["pn"], FILTER_SANITIZE_STRING);
    $service         = filter_var($_POST["service"], FILTER_SANITIZE_STRING);
    $msg             = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
    $pageurl         = filter_var($_POST["pageurl"], FILTER_SANITIZE_STRING);
    $ip              = $_POST['ip'];
    $details         = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from_email . "\r\n";
    $headers .= "Reply-To: " . $reply_to_email . "" . "\r\n";
    $headers .= "BCC: ,";
    
    $body .= "\n Name: " . $sender_name . "<br/>";
    $body .= "\n Email: " . $reply_to_email . "<br/>";
    $body .= "\n Contact Number: " . $number . "<br/>";
    // $body .= "\n Services: " . $service . "<br/>";
    // $body .= "\n Message: " . $msg . "<br/>";
    $body .= "\n Page Url: " . $pageurl . "<br/>";
    $body .= "\n IP Address: " . $ip . "<br/>";
    $body .= "\n City: " . $details->city;
    $body .= "$boundary\r\n";
    
    $success = @mail($recipient_email, $subject, $body, $headers);
}


// POPUP Form
if (isset($_POST['popupform'])) {
    $from_email      = $_POST["popemail"];
    $recipient_email = 'info@sandstech.org';
    $subject         = "sandstech | POPUP Form";
    $sender_name     = filter_var($_POST["popname"], FILTER_SANITIZE_STRING);
    $reply_to_email  = filter_var($_POST["popemail"], FILTER_SANITIZE_STRING);
    $contact         = filter_var($_POST["popnumber"], FILTER_SANITIZE_STRING);
    $message         = filter_var($_POST["popmsg"], FILTER_SANITIZE_STRING);
    $pageurl         = filter_var($_POST["pageurl3"], FILTER_SANITIZE_STRING);
    $ip              = $_POST['ip'];
    $details         = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from_email . "\r\n";
    $headers .= "Reply-To: " . $reply_to_email . "" . "\r\n";
    $headers .= "BCC: ,";

    $body  = "\n Name: " . $sender_name . "<br/>";
    $body .= "\n Email: " . $reply_to_email . "<br/>";
    $body .= "\n Contact Number: " . $contact . "<br/>";
    $body .= "\n Message: " . $message . "<br/>";
    $body .= "\n Page Url: " . $pageurl . "<br/>";
    $body .= "\n IP Address: " . $ip . "<br/>";
    $body .= "\n City: " . $details->city;

    $success = @mail($recipient_email, $subject, $body, $headers);
}



//Ghostwriting Form
if (isset($_POST['bottomform'])) {
    $from_email         = $_POST["email"]; 
    $recipient_email    = 'info@sandstech.org'; 
    $subject = "sandstech | Bottom Form" ;
    $sender_name    = filter_var($_POST["gname"], FILTER_SANITIZE_STRING); 
    $reply_to_email = filter_var($_POST["gemail"], FILTER_SANITIZE_STRING); 
    $contact        = filter_var($_POST["gnumber"], FILTER_SANITIZE_STRING);
    $message        = filter_var($_POST["gmsg"], FILTER_SANITIZE_STRING);
    $tittle        = filter_var($_POST["formtitle"], FILTER_SANITIZE_STRING);
    $pageurl2        = filter_var($_POST["pageurl2"], FILTER_SANITIZE_STRING);
    $ip = $_POST['ip'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "BCC: ,";
        $body .= "\n Name: " . $sender_name . "<br/>";
        $body .= "\n Email: " . $reply_to_email . "<br/>"; 
        $body .= "\n Contact Number: " . $contact . "<br/>";
//      $body .= "\n Services: " . $service . "<br/>";
        $body .= "\n Message: " . $message . "<br/>";
        $body .= "\n Page Url: " . $pageurl2 . "<br/>";
        $body .= "\n IP Address: " . $ip . "<br/>";
        $body .= "\n City: " . $details->city;
        $body .= "$boundary\r\n";
    $success = @mail($recipient_email, $subject, $body, $headers);
}

//Ghostwriting Form
if (isset($_POST['aboutus'])) {
    $from_email         = $_POST["email"]; 
    $recipient_email    = 'info@sandstech.org'; 
    $subject = "sandstech | About Us Form" ;
    $sender_name    = filter_var($_POST["gname"], FILTER_SANITIZE_STRING); 
    $reply_to_email = filter_var($_POST["gemail"], FILTER_SANITIZE_STRING); 
    $contact        = filter_var($_POST["gnumber"], FILTER_SANITIZE_STRING);
    $service        = filter_var($_POST["gservice"], FILTER_SANITIZE_STRING);
    $tittle        = filter_var($_POST["formtitle"], FILTER_SANITIZE_STRING);
    $pageurl        = filter_var($_POST["pageurl"], FILTER_SANITIZE_STRING);
    $ip = $_POST['ip'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "BCC: ,";
        $body .= "\n Name: " . $sender_name . "<br/>";
        $body .= "\n Email: " . $reply_to_email . "<br/>"; 
        $body .= "\n Contact Number: " . $contact . "<br/>";
        $body .= "\n Services: " . $service . "<br/>";
        $body .= "\n Page Url: " . $pageurl . "<br/>";
        $body .= "\n IP Address: " . $ip . "<br/>";
        $body .= "\n City: " . $details->city;
        $body .= "$boundary\r\n";
    $success = @mail($recipient_email, $subject, $body, $headers);
}


//Contact Form
if (isset($_POST['contact-form'])) {
    $from_email         = $_POST["email"]; 
    $recipient_email    = 'info@sandstech.org'; 
    $subject = "sandstech | Contact From" ;
    $sender_name    = filter_var($_POST["contactname"], FILTER_SANITIZE_STRING); 
    $reply_to_email = filter_var($_POST["contactemail"], FILTER_SANITIZE_STRING); 
    $contact        = filter_var($_POST["contactphone"], FILTER_SANITIZE_STRING);
    $message        = filter_var($_POST["contactmsg"], FILTER_SANITIZE_STRING);
    $tittle        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    $pageurl        = filter_var($_POST["pageurlcf"], FILTER_SANITIZE_STRING);
    $ip = $_POST['ip'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
        $headers .= "BCC: ,";
        $body .= "\n Name: " . $sender_name . "<br/>";
        $body .= "\n Email: " . $reply_to_email . "<br/>"; 
        $body .= "\n Contact Number: " . $contact . "<br/>";
        $body .= "\n Message: " . $message . "<br/>";
        $body .= "\n Page Url: " . $pageurl . "<br/>";
        $body .= "\n IP Address: " . $ip . "<br/>";
        $body .= "\n City: " . $details->city;
        $body .= "$boundary\r\n";
    $success = @mail($recipient_email, $subject, $body, $headers);
}

//Auto Popup Form
// if (isset($_POST['popupform'])) {
//     $from_email         = $_POST["email"]; 
//     $recipient_email    = 'info@sandstech.org'; 
//     $subject = "sandstech | Offer Popup Form" ;
//     $sender_name    = filter_var($_POST["name"], FILTER_SANITIZE_STRING); 
//     $reply_to_email = filter_var($_POST["email"], FILTER_SANITIZE_STRING); 
//     $contact        = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
//     $message        = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
//     $tittle        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
//     // $pageurl        = filter_var($_POST["pageurl"], FILTER_SANITIZE_STRING);
//     $ip = $_POST['ip'];
//     $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
//         $headers = "MIME-Version: 1.0\r\n"; 
//         $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//         $headers .= "From:".$from_email."\r\n"; 
//         $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
//         $headers .= "BCC: ,";
//      $body .= "\n Name: " . $sender_name . "<br/>";
//      $body .= "\n Email: " . $reply_to_email . "<br/>"; 
//      $body .= "\n Contact Number: " . $contact . "<br/>";
//      $body .= "\n Message: " . $message . "<br/>";
//      $body .= "\n Page Url: " . $pageurl . "<br/>";
//      $body .= "\n IP Address: " . $ip . "<br/>";
//      $body .= "\n City: " . $details->city;
//         $body .= "$boundary\r\n";
//     $success = @mail($recipient_email, $subject, $body, $headers);
// }


if (isset($success) && $success) { 
?>


<html class="no-js" lang="en">
<head>
<title>Thank You</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="/assets/css/style.css" rel="preload" as="style" />
<link rel="icon" href="./favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->

<!-- Event snippet for Website lead conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11368999251/9j-SCJ2R-fQYENPSlK0q'});
</script>

<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"97110443", enableAutoSpaTracking: true};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"97110443"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>

</head>
<body>
    <section class="error-page onepage-screen-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <img class="lozad " data-src="/assets/images/footerlogo.png" alt="" src="/assets/images/footerlogo.png" data-loaded="true">
                        <div class="content" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                            <h4 class="thakyouhead"> Thank You <?php echo $sender_name; ?></h4>
                            <p>We can already envision a bright future ahead for you. Our customer support team will be in contact with you shortly. Now that you have sown the seeds of your success, we’ll ripen your fruit of prosperity.</p>
                            <ul class="hdrbtn">
                                <li class="blck">
                                    <a href="javascript:void(Tawk_API.toggle())">Live Chat</a>
                                </li>
                                <li class="blu mrgnrl">
                                    <a href="../" class="popup" id="popup">Go Back To Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-lg-6">-->
                    <!--    <div class="thumbnail" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="400">-->
                            
                    <!--        <img class="lozad " src="/assets/images/ghostwriting/aboutimg.png" alt="404" >-->
                            
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
    </section>
<?php }
else 
{
?>
<H1>Your Request Can Not Be Submit. Please Try Again...</H1>
<?php }
?>
<style>
.align-items-center {
    align-items: center !important;
}
ul.hdrbtn{justify-content: center;}
.thumbnail {border: 1px solid transparent;}
.content p { font-size: 20px; line-height: 40px;color: #fff;margin-bottom: 25px;padding: 0 180px; }h4.thakyouhead { font-size: 40px;color: #fff; margin: 80px 0px 20px; font-weight: 600; border-bottom: 2px solid #00b3d8; line-height: 1; padding-bottom: 10px; display: inline-block; }.onepage-screen-area {margin-top: 0px;padding: 0px 0 50px;}a.axil-btn.btn-fill-primary {border: none;box-shadow: none;padding: 13px 28px;border-radius: 5px;outline: none;letter-spacing: 1px;text-transform: uppercase;font-size: 17px; display: inline-block;margin: 0 auto!important;height: auto;color: #fff;font-weight: 600;background: linear-gradient(to right,#e86236 , #e86236);text-decoration: none;}.content {overflow: inherit;}.onepage-screen-area {position: relative;z-index: 1;background: url(/assets/images/bannerbg.png); background-size:cover; background-repeat:no-repeat; min-height: 500px;height: 100vh;padding: 150px 0;display: -webkit-box;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-box-align: center;-webkit-align-items: center;-ms-flex-align: center;align-items: center;overflow: hidden;}
</style>
<script>
window.setTimeout(function() {
    window.location.href = 'http://sandstech.org';
}, 5000);
    </script>
</body>
</html>
