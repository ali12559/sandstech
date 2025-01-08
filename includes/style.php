<?php  $phone = "+92 313 0375258"; ?>
<?php  $email = "info@sandstech.org"; ?>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="index,follow">
<link rel="icon" href="<?php echo $basesurl;?>images/fav.png"/>
<meta name="google-site-verification" content="psMw95Xqj6nQJ2YskBvBchZYslIe5OBQNlDxBubdO4o" />
<meta name='dmca-site-verification' content='akVKZlVYOENFT3E2K2k4bjViQmY4blJBdkxESVh5YnpmblJSZm02Y0lPST01' />
<link rel="stylesheet" href="<?php echo $basesurl;?>css/m-style.css" rel="preload" as="style" />
<link rel="stylesheet" href="<?php echo $basesurl;?>css/style.css" rel="preload" as="style" />
<link rel="stylesheet" href="<?php echo $basesurl;?>css/responsive.css" rel="preload" as="style" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link  href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<?php
	// session_start();
   	// if ( !isset( $_SESSION["origURL"] ) )
    //   	$_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
?>

<?php
   	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<?php
         function getUserIP()
         {
             // Get real visitor IP behind CloudFlare network
             if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                       $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                       $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
             }
             $client  = @$_SERVER['HTTP_CLIENT_IP'];
             $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
             $remote  = $_SERVER['REMOTE_ADDR'];
         
             if(filter_var($client, FILTER_VALIDATE_IP))
             {
                 $ip = $client;
             }
             elseif(filter_var($forward, FILTER_VALIDATE_IP))
             {
                 $ip = $forward;
             }
             else
             {
                 $ip = $remote;
             }
             return $ip;
         }
         $user_ip = getUserIP();
         // Output IP address [Ex: 177.87.193.134]
?>
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
