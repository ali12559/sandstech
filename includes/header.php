<?php
if ($_SERVER['HTTP_HOST'] == "localhost") {
$folder_name = ""; $path = 'http://localhost/sandstech/'.$folder_name;}
else {
$folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].'/'.$folder_name;
}
// echo  $path;
?>
<main class="app-container">
   <header class="header" id="header">
      <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 ">
               <div class="lgo ">
                  <a href="<?php echo $path;?>"><img class="lazy lrg-logo" data-src="<?php echo $basesurl;?>images/logo.webp" alt="" src="<?php echo $basesurl;?>images/logo.webp" data-loaded="true"></a>
               </div>
            </div>
            <div class="col-lg-9 d-lg-block d-md-none d-sm-none d-none">
               <div class="menu wow fadeInUp text-end">
                  <ul class="dsktpmenu">
                     <li class="lnk "><a href="<?php echo $path;?>">Home</a></li>
                     <li class="lnk "><a href="<?php echo $path;?>about-us.php">About Us</a></li>
                     <li class="lnk dropdown "><a href="javascript:;">Services <i class=" fa-solid fa-caret-down"></i></a>
                     <ul class="dropdown-menu ">
                        <li><i class="fa-solid fa-mobile-screen-button"></i><a href="<?php echo $path;?>mobile-app-development.php">Mobile App Development</a></li>
                        <li><i class="fa-solid fa-laptop"></i><a href="<?php echo $path;?>web-development.php">Web Development</a></li>
                        <li><i class="fa-solid fa-cart-shopping"></i><a href="<?php echo $path;?>e-commerce.php">E-commerce</a></li>
                        <li class="btmn"><i class="fa-solid fa-bullhorn fa-rotate-by" style="--fa-rotate-angle: -25deg;"></i><a href="<?php echo $path;?>digital-marketing.php">Digital Marketing</a></li>
                     </ul>
                  </li>
                  <li class="lnk "><a href="<?php echo $path;?>portfolio.php">Portfolio</a></li>
                  <li class="lnk dropdown "><a href="javascript:;">Case Studies <i class="fa-solid fa-caret-down"></i></a>
                  <ul class="dropdown-menu ">
                     <li><i class="fa-solid fa-mobile-screen-button"></i><a href="<?php echo $path;?>mobile-case-studies.php">Mobile Application</a></li>
                     <li class=""><i class="fa-solid fa-cart-shopping"></i><a href="<?php echo $path;?>ecommerce-case-studies.php">E-Commerce</a></li>
                     <li class="btmn"><i class="fa-solid fa-laptop"></i><a href="<?php echo $path;?>website-case-studies.php">Website</a></li>
                  </ul>
               </li>
               <li class="lnk "><a href="<?php echo $path;?>contact-us.php">Contact Us</a></li>
               <li class="mnbtn"><a href="<?php echo $path;?>contact-us.php">Get Started</a></li>
            </ul>
         </div>
      </div>
   </div>
</div>
</header>
<nav class="nav">
<div class="hamburger-container">
   <ul class="hamburger">
      <li></li>
      <li></li>
      <li></li>
   </ul>
</div>
<ul class="dsktpmenu " id="menu">
                     <li class="lnk "><a href="<?php echo $path;?>">Home</a></li>
                     <li class="lnk "><a href="<?php echo $path;?>about-us.php">About Us</a></li>
                     <li class="lnk dropdown "><a href="javascript:;">Services <i class=" fa-solid fa-caret-down"></i></a>
                     <ul class="dropdown-menu ">
                        <li><i class="fa-solid fa-mobile-screen-button"></i><a href="<?php echo $path;?>mobile-app-development.php">Mobile App Development</a></li>
                        <li><i class="fa-solid fa-laptop"></i><a href="<?php echo $path;?>web-development.php">Web Development</a></li>
                        <li><i class="fa-solid fa-cart-shopping"></i><a href="<?php echo $path;?>e-commerce.php">E-commerce</a></li>
                        <li class="btmn"><i class="fa-solid fa-bullhorn fa-rotate-by" style="--fa-rotate-angle: -25deg;"></i><a href="<?php echo $path;?>digital-marketing.php">Digital Marketing</a></li>
                     </ul>
                  </li>
                  <li class="lnk "><a href="<?php echo $path;?>portfolio.php">Portfolio</a></li>
                  <li class="lnk dropdown "><a href="javascript:;">Case Studies <i class="fa-solid fa-caret-down"></i></a>
                  <ul class="dropdown-menu ">
                     <li><i class="fa-solid fa-mobile-screen-button"></i><a href="<?php echo $path;?>mobile-case-studies.php">Mobile Application</a></li>
                     <li class=""><i class="fa-solid fa-cart-shopping"></i><a href="<?php echo $path;?>ecommerce-case-studies.php">E-Commerce</a></li>
                     <li class="btmn"><i class="fa-solid fa-cart-shopping"></i><a href="<?php echo $path;?>Website-case-studies.php">Website</a></li>
                  </ul>
               </li>
               <li class="lnk "><a href="<?php echo $path;?>contact-us.php">Contact Us</a></li>
               <li class="mnbtn"><a href="<?php echo $path;?>contact-us.php">Get Started</a></li>
            </ul>
</nav>