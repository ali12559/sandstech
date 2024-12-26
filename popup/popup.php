<style>
html.modal-active,body.modal-active{overflow:hidden;}
#modal-container{position:fixed;display:table;height:100%;width:100%;top:0;left:0;transform:scale(0);z-index:9;}
#modal-container.popup{transform:scaleY(0.01) scaleX(0);animation:unfoldIn 1s cubic-bezier(0.165,0.84,0.44,1) forwards;}
#modal-container.popup .modal-background .modal{transform:scale(0);animation:zoomIn 0.5s 0.8s cubic-bezier(0.165,0.84,0.44,1) forwards;}
#modal-container.popup.out{transform:scale(1);animation:unfoldOut 1s 0.3s cubic-bezier(0.165,0.84,0.44,1) forwards;}
#modal-container.popup.out .modal-background .modal{animation:zoomOut 0.5s cubic-bezier(0.165,0.84,0.44,1) forwards;}
#modal-container .modal-background{position:relative;display:table-cell;background:rgba(0,0,0,0.8);text-align:center;vertical-align:middle;}
#modal-container .modal-background .modal{padding: 50px 30px 0 40px;text-align:left;display:inline-block;font-weight:300;position:relative;height: 463px; width: 770px; border-radius: 0;background-image: url(popup/Popupas2.png);background-repeat: no-repeat;background-size: cover;overflow: visible;}
#modal-container .modal-background .modal p{
    color: #FFF;
    font-size: 11.725px;
    font-weight: 500;
    line-height: 20.691px; /* 176.471% */
    width: 100%;
    margin: 10px 0 0 0;
}
#modal-container .modal-background .modal .modal-svg{position:absolute;top:0;left:0;height:100%;width:100%;border-radius:3px;pointer-events:none;}
#modal-container .modal-background .modal .modal-svg rect{stroke:#fff;stroke-width:2px;stroke-dasharray:778;stroke-dashoffset:778;}
#modal-container .modal-background .modal h5{color:#191919;font-size:20px;font-style:normal;font-weight:400;line-height:20px;letter-spacing:-0.4px;text-transform:capitalize;}
#modal-container .modal-background .modal h4{ /* 108% */color: #fff;font-size: 34.485px;font-weight: 600;line-height: 37.243px; /* 108% */text-transform: capitalize;width: 60%;}
#modal-container .modal-background .modal form{margin-top:15px;}
#modal-container .modal-background .modal form ul{}
#modal-container .modal-background .modal form ul li{position:relative;margin-bottom:15px;}
#modal-container .modal-background .modal form ul li i.fa{position:absolute;color:#000;top:15px;left:15px;font-size:12px;}
#modal-container .modal-background .modal form ul li input{width: 48%;border:0;outline:none;color: #000;font-size:16px;font-style:normal;font-weight:400;line-height:28px;padding:6px 0 6px 40px;border-radius: 5.518px;background: #fff;}
#modal-container .modal-background .modal form ul li:last-child{margin-bottom:0;}
#modal-container .modal-background .modal form ul li button.btn-size{border-radius: 5.518px;background: linear-gradient(168deg, #D5FD4E -2.06%, #CAD2AE 116.28%);color: #597300;border: 0;padding: 6px 12px;}
#modal-container .modal-background .modal form ul li button.btn-size:before{width:35px;height:35px;}
#modal-container .modal-background .modal form ul li button.btn-size i{right: -5px;position: relative;}
#modal-container .modal-background .modal form ul li button.btn-size:hover:before{width:90%;}
#modal-container .modal-background .modal img.cross-sign{width:auto;position:absolute;right:10px;top:10px;}
#modal-container .modal-background .modal img.cross-sign:hover{opacity:0.5;}
#modal-container .modal-background .modal img.men{width: auto;position:absolute;right: -22px; bottom: -22px;pointer-events:none;z-index:1;animation:hmebannr_floatingtpbtm 6s infinite;}
@keyframes unfoldIn{
    0%{transform:scaleY(0.005) scaleX(0);}
    50%{transform:scaleY(0.005) scaleX(1);}
    100%{transform:scaleY(1) scaleX(1);}
}
@keyframes unfoldOut{
    0%{transform:scaleY(1) scaleX(1);}
    50%{transform:scaleY(0.005) scaleX(1);}
    100%{transform:scaleY(0.005) scaleX(0);}
}
@keyframes zoomIn{
    0%{transform:scale(0);}
    100%{transform:scale(1);}
}
@keyframes zoomOut{
    0%{transform:scale(1);}
    100%{transform:scale(0);}
}
.frmbtn button{    width: 28%;
    background: #ff3838;
    border-radius: 10px;
    border: none;
    font: normal normal 600 14px / 23px Nunito;
    letter-spacing: 0px;
    color: #FFFFFF;
    padding: 8px 0;
    border: 1px solid transparent;}
/*#modal-container .modal-background .modal-custom-bg{position:absolute;width: 35%; height: 60%;top:0;left:0;bottom:0;right:0;margin:auto;transform:rotate(2.532deg);border-radius:42px;opacity:0.9;background:rgba(255,255,255,0.50);}*/
@media only screen and (max-width:1380px){
#modal-container .modal-background .modal {padding: 90px 30px 0 40px; width: 440px; height: 570px; background-size: 100% 100%; }

}
@media only screen and (max-width:820px){
  #modal-container .modal-background .modal {
    padding: 95px 30px 0 40px;
    height: 600px;
}
#modal-container .modal-background .modal-custom-bg {
    width: 60%;
    height: 50%;
}

}


@media only screen and (max-width:430px){
  #modal-container .modal-background .modal {
    padding: 100px 30px 0 40px ;
    height: 650px;
}
}
@media only screen and (max-width:767px){
#modal-container .modal-background .modal {width: 95%; }
#modal-container .modal-background .modal p {width: 100%; }
#modal-container .modal-background .modal h4 {position: relative; z-index: 1; }
#modal-container .modal-background .modal-custom-bg {width: 100%; }

}
</style>

<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <div class="content">
        <a id="cross" href="javascript:;"><img class="cross-sign" src="popup/cross.svg" alt="*"></a>
        <h4><span>Get Ready To</span> <br>
                Become a Bestseller!</h4>
        <form enctype="multipart/form-data" id="popupform" class="offr-frm" method="post" action="../thankyou/">
            <ul>
                <li>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Name *" name="popname" required>
                </li>
                <li>
                    <i class="fa fa-mobile-android-alt" aria-hidden="true"></i>
                    <input name="popnumber" type="text" minlength="10" maxlength="10" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )" placeholder="Phone *" required>
                </li>
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="email" placeholder="Email *" name="popemail" required>
                </li>
                <li>
                    <i class="fa fa-comment-alt" aria-hidden="true"></i>
                    <input name="popmsg" type="text" placeholder="Message *" required>
                </li>
                <li class="wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="frmbtn">
                        <button aria-label="Form Button" class="pinkbtn" name="submit" type="submit">Get Started</button>
                    </div>
                    <input type="hidden" name="popupform" value="" />
                    <input type="hidden" name="pageurl3" id="pageurl3" value="" />
                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
                   <script>
                        document.getElementById('pageurl3').value = window.location.href;
                    </script>
                </li>
            </ul>
        </form>
        <!-- <img class="men" src="popup/popupbull.webp" alt="*"> -->
        <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
          <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
        </svg>
      </div>
    </div>
    <div class="modal-custom-bg"></div>
  </div>
</div>

<script type="text/javascript">
  $(".popup").click(function () {
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
})

$('#cross').click(function(){
  $('#modal-container').addClass('out');
  $('body').removeClass('modal-active');
});

</script>