<style>
.balti_popup{width:960px;border-radius:11px;/* padding:50px; */overflow:hidden;background:#001C3D;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center;background-repeat:no-repeat;background-position:bottom;border:2px solid #fff}
.modal{background:rgba(0,0,0,0.6);backdrop-filter:blur(20px);z-index:9999;}
.balti_popup h2{font-size:40px;color:#fff;font-weight:600;/* margin: 60px 0 15px; */line-height:normal;text-align:left;}
.balti_popup h2 span{color:#8D2CFF;}
.balti_popup .left-side{/* background-image: url("popup/popup-bg.png"); */background-size:cover;padding:40px 50px 0;background-repeat:no-repeat;background-position:left top;height:100%;background:#000;}
.balti_popup img{max-width:500px;transform:translate(-70px,6px);}
.balti_popup ul{margin:0;padding:0;}
.balti_popup input::placeholder{color:#fff;}
.balti_popup ul li{text-align:left;position:relative;width:100%;margin:12px 0px;display:inline-block;}
.balti_popup ul li i{position:absolute;top:15px;left:14px;color:#ee3074;}
.balti_popup ul li input[type="text"],.balti_popup ul li input[type="email"],.balti_popup ul li input[type="number"],.balti_popup ul li textarea{background:#4F4F4F;border:#6e6e6e 2px solid;padding:6px 4px;width:100%;border-radius:2px;font-size:14px;color:#fff;box-shadow:none!important;outline:none 0px!important;}
.balti_popup ul li textarea{height:100px;resize:none;}
.balti_popup ul li input[type="text"]:focus,.balti_popup ul li input[type="email"]:focus,.balti_popup ul li textarea:focus{border:2px solid #00d659;}
.balti_popup .pd-right-0{padding-right:0px!important;}
.balti_popup ul li input[type="submit"]{background:#8D2CFF;color:#000;font-size:15px;border:2px solid #8D2CFF;text-transform:uppercase;font-weight:600;padding:7px 9px;letter-spacing:1px;outline:0px none;border-radius:5px;width:195px;text-align:center;cursor:pointer;display:block;width:30%;transition:.1s linear;}
.balti_popup ul li input[type="submit"]:hover{background:#000;color:#fff;}
.balti_popup .fancybox-close-small{position:absolute;top:0;right:0;width:44px;height:44px;padding:0;margin:0;border:0;border-radius:0;outline:none;background:transparent;z-index:10;outline:none;cursor:pointer;}
.balti_popup .fancybox-close-small{border:#8D2CFF 3px solid;background:#8D2CFF;border-radius:72px;text-align:center;box-shadow:#000 0 0 10px;right:16px;top:17px;overflow:visible;outline:none!important;}
.balti_popup select{width:100%;background:#4F4F4F;color:#fff;padding:6px 4px;border:#6e6e6e 2px solid;}
.balti_popup .fancybox-close-small:hover{z-index:11;}
.balti_popup .fancybox-close-small:after{position:absolute;top:2px;right:5px;width:30px;height:30px;font:20px/30px Arial,Helvetica Neue,Helvetica,sans-serif;color:#888;font-weight:300;text-align:center;border-radius:50%;border-width:0;transition:background .2s;box-sizing:border-box;z-index:2;content:"x";color:#000;font-size:25px;right:4px;transition:.1s linear;background:#8D2CFF;}
.balti_popup .fancybox-close-small:hover:after{color:white!important;}
.balti_popup button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
.balti_popup form.validate-balti_popup{padding:40px 30px;}
.balti_popup .heading h3{color:#fff;text-align:left;}
.balti_popup p{color:#fff;margin:0 0 5px 0}
@media screen and (max-width:1400px){
}
@media screen and (max-width:820px){
    .balti_popup{width:700px}
    .balti_popup form.validate-balti_popup{padding:40px 10px;}
    .balti_popup h2{font-size:40px;}
    .balti_popup .left-side{padding:40px 30px}
    .balti_popup img{max-width:400px;transform:translate(-67px,45px);}
}
@media screen and (max-width:767px){
    .balti_popup .left-side{display:none;}
    .balti_popup{padding:20px;}
    .balti_popup .pd-right-0{padding-right:15px!important;}
    .balti_popup ul li textarea{height:85px;}
}
@media screen and (max-width:490px){
    .balti_popup{width:90%;}
    .balti_popup h2{font-size:25px;}
}
.modal-backdrop{display:none!important;}
.balti_popup::placeholder{color:#000;opacity:1;}
.balti_popup:-ms-input-placeholder{color:#000;}
.balti_popup::-ms-input-placeholder{color:#000;}
.selected-dial-code{color:#000;}
</style>
<!-- START POPUP MODAL -->
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div style="display: inline-block;" class="balti_popup popup-form" id="balti_popup">
        <div class="row">
            <div class="col-md-6">
                <div class="left-side">
                    <h2>Transforming Ideas Into <span>APPS</span></h2>
                    <img src="popup/popup-mobile.png">
                </div>
            </div>
            <div class="col-md-6">
                <form action="email/form-handler.php" method="post" class="validate-balti_popup">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>Let's Work Together</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>
                            <p>Full Name</p>
                            <input type="text" placeholder="" name="name" required>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>
                            <p>Phone Number</p>
                            <input name="number" type="text" minlength="10" maxlength="10" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )" placeholder="" required>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 ">
                    <ul>
                        <li>
                            <p>When's a good time to call?</p>
                            <input type="text" placeholder="Monday at 2pm" name="call" required>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                        <ul>
                            <li>
                                <p>Looking For</p>
                                <select>
                                    <option value="AndroidApp">Android App Development</option>
                                    <option value="HybridApp">Hybrid App Development</option>
                                    <option value="IOS">iOS App Development</option>
                                    <option value="ARVR">AR/VR Development</option>
                                    <option value="FlutterApp">Flutter App Development</option>
                                    <option value="other">Other</option>
                                </select>
                            </li>
                        </ul>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>
                            <p>Can’t wait for a callback? Call us now (844) 250-1714 9.00am - 6.00pm Monday - Friday</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>
                            <input type="submit" name="cta" value="Submit">
                            <input type="hidden" name="pkg_name" value="">
                            <input type="hidden" name="pageurl" value="<?php echo $actual_link; ?>">
                            <input type="hidden" name="ip2loc_ip" value="">
                            <input type="hidden" name="ip2loc_isp" value="">
                            <input type="hidden" name="ip2loc_org" value="">
                            <input type="hidden" name="ip2loc_country" value="">
                            <input type="hidden" name="ip2loc_region" value="">
                            <input type="hidden" name="ip2loc_city" value="">
                            <input type="hidden" name="Form_name" value="Popup Form">
                        </li>
                    </ul>
                </div>
            </div>
        </form>
            </div>
        </div>
        <button data-fancybox-close="" class="fancybox-close-small close"></button>
    </div>
</div>
<!-- END POPUP MODAL -->
<script>
// POPUP Script
$(".close").click(function () {
$(".modal").hide()
})
$(".popup").click(function () {
$(".modal").show()
})
$(".btn-order").click(function () {
$(".modal").show()
})
setTimeout(function () {
$(".modal").show()
}, 15000);
</script>

<script>
    $('.btn-order').click(function () {
        var pkg_name = $(this).parent().find('.btn-order').attr('data-formtype');
        $('.popup-form input[name="pkg_name"]').val(pkg_name);
    });
</script>