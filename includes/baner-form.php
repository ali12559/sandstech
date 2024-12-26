<div class="row">
    <div class="col-md-12 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
        <form enctype="multipart/form-data" id="ctafrom" class="offr-frm" method="post" action="../thankyou/">
            <div class="row align-items-center justify-content-between no-gutters">
                <div class="col-md-3 g-md-0">
                    <div class="form-group brdr">
                        <input class="form-control" name="cn" placeholder="Name" type="text" required="" aria-required="true">
                    </div>
                </div>
                <div class="col-md-3 g-md-0 ">
                    <div class="form-group">
                        <input class="form-control" name="em" placeholder="Email" type="email" required="" aria-required="true">
                    </div>
                </div>
                <div class="col-md-3 g-md-0 ">
                    <div class="form-group">
                        <input name="pn" type="text" minlength="10" maxlength="10" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )" placeholder="Phone *" required="">
                    </div>
                </div>
                <div class="col-md-3 g-md-0 ">
                    <div class="form-group">
                        <button aria-label="Form Button" class="pinkbtn" name="submit" type="submit">Let's Start</button>
                    </div>
                    <input type="hidden" name="banerform" value="" />
                    <input type="hidden" name="pageurl" id="pageurl" value="" />
                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
                   <script>
                        document.getElementById('pageurl').value = window.location.href;
                    </script>
                </div>
            </div>
        </form>
        <div class="cntn">
            <p>Rated 9 out of 10<img src="<?php echo $basesurl;?>images/fivestar.svg">based on 3,543 satisfied customers.</p>
        </div>
    </div>
</div>