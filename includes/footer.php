<footer class="sec-pad" id="footer">
    <div class="container wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
        <div class="row">
            <div class="col-md-4">
                <div class="hed">
                    <a class="ftlgo" href="<?php echo $path;?>"><img class="lazy " data-src="<?php echo $basesurl;?>images/logo.webp" alt="" src="<?php echo $basesurl;?>images/logo.webp" data-loaded="true"></a>
                    <img class="lazy " data-src="<?php echo $basesurl;?>images/brand-logo.png" alt="" src="<?php echo $basesurl;?>images/brand-logo.png" data-loaded="true">
                    
                </div>
            </div>
            <div class="col-md-2 col-sm-3">
                <div class="wrpr">
                    <h4>Quick Links</h4>
                    <ul class="lnks clrchng">
                        <li><a href="<?php echo $path;?>">Home</a></li>
                        <li><a href="<?php echo $path;?>about-us.php">About Us</a></li>
                        <li><a href="<?php echo $path;?>portfolio.php">Portfolio</a></li>
                        <li><a href="<?php echo $path;?>contact-us.php">Contact Us</a></li>
                        <li><a href="<?php echo $path;?>term-and-condition.php">Terms & Conditions</a></li>
                        <li><a href="<?php echo $path;?>privacy-policy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-5">
                <div class="wrpr">
                    <h4>Services </h4>
                    <ul class="lnks clrchng">
                        <li><a href="<?php echo $path;?>mobile-app-development.php">Mobile App Development</a></li>
                        <li><a href="<?php echo $path;?>web-development.php">Web Development</a></li>
                        <li><a href="<?php echo $path;?>e-commerce.php">E-commerce</a></li>
                        <li><a href="<?php echo $path;?>digital-marketing.php">Digital Marketing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="wrpr">
                    <h4>Contact</h4>
                    <ul class="lnks mgr">
                        <li>
                            <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                        </li>
                        <ul class="tabs">
                            <li class="current" data-targetit="pak"><img src="<?php echo $basesurl; ?>images/pakflg.png"></li>
                            <li class="" data-targetit="uae"><img src="<?php echo $basesurl; ?>images/uaeflg.png"></li>
                            <li class="" data-targetit="usa"><img src="<?php echo $basesurl; ?>images/usaflg.png"></li>
                        </ul>
                        <li class="current my-tabs pak" >
                            <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                        </li>
                        <li class="current my-tabs pak" >
                            <a href="javascript:;">Office# 202, Balad Trade Centre II, 203 Alamgir Rd, Bahadurabad Bahadur Yar Jang CHS, Karachi, 07482</a>
                        </li>
                        <li class=" my-tabs uae">
                            <a href="tel:+971521248621">+971 52 124 8621</a>
                        </li>
                        <li class=" my-tabs uae">
                            <a href="javascript:;">Meydan Grandstand, 6th floor, Meydan Road, Nad Al Sheba, Dubai, U.A.E.</a>
                        </li>
                        <li class=" my-tabs usa">
                            <a href="tel:+(737) 443-7422">+(737) 443-7422</a>
                        </li>
                        <li class=" my-tabs usa">
                            <a href="javascript:;">12211 Pamela Sue CT, Meadows Place, Texas, 77477, USA</a>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
        <div class="row align-items-center">
            <div class="col-md-4 col-sm-4 col-12">
                <p>© <span id="year"></span> Sands Tech</p>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <ul class="socl">
                    <li><a href="https://www.facebook.com/sandstech.org/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/sands_tech/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://pk.linkedin.com/company/sands-tech" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-12 text-end">
                <img class="lazy" src="<?php echo $basesurl; ?>images/footercards.png" alt="*">
                    <p class="usd">We accept payments in USD.</p>
            </div>
        </div>
    </div>
</div>
</main>
<script src="<?php echo $basesurl;?>js/mlib.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js" defer></script>
<script src="<?php echo $basesurl;?>js/functions.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php
$popup = $srcurl."../popup/popup.php";
include_once($popup);
?>