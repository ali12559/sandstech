<?php

$baseurl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

# LIST EMAIL ADDRESS

$to = "muhammad.shahroz@canvasdigital.net";
//$to ="salman.gillani@canvasdigital.net,maroof@canvasdigital.net,zain@canvasdigital.net,faran.tanveer@canvasdigital.net,maroofbutt100@gmail.com,abdullah@canvasdigital.net";

# SUBJECT 
$subject = "Explain Art Videos Website Lead";

# Thankyou PAGE

$location = "https://www.explainartvideos.com/thank-you";

#Sender Email
$from = "support@explainartvideos.com";

if(!empty($_REQUEST['name']) && !empty($_REQUEST['email']) && !empty($_REQUEST['number']) && !empty($_REQUEST['ip2loc_ip'])){


#Email data
$emailBody = '<!doctype html>
<html lang="en-US">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Lead Data</title>
        <meta name="description" content="Order Form">
    </head>
    <style>
    a:hover {text-decoration: underline !important;}
    </style>
    <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
        <table>
            <tr>
                <td>
                    <table style="background-color: #f2f3f8; max-width:800px; margin:0 auto;" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="height:80px;">&nbsp;</td>
                        </tr>                        
                        <tr>
                            <td style="height:20px;">&nbsp;</td>
                        </tr>
                        <!-- Email Content -->
                        <tr>
                            <td>
                                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="max-width:800px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
                                    <tr>
                                        <td style="height:40px;">&nbsp;</td>
                                    </tr>
                                    <!-- Title -->
                                    <tr>
                                        <td style="padding:0 15px; text-align:center;">
                                            <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;">Lead Form Data</h1>
                                            <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece;
                                            width:100px;"></span>
                                        </td>
                                    </tr>
                                    <!-- Details Table -->
                                    <tr>
                                        <td>
                                            <table cellpadding="0" cellspacing="0" style="width: 100%; border: 1px solid #ededed">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Name</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['name'] .'</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Email</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['email'] .'</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Phone Number</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['number'] .'</td>
                                                    </tr>   
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Message</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['msg'] .'</td>
                                                    </tr> 
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Package Name</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['pkg_name'] .'</td>
                                                    </tr>                                                   
                                                    
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Country</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['ip2loc_country'] .'</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        City</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['ip2loc_city'] .'</td>
                                                    </tr>  
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        IP</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['ip2loc_ip'] .'</td>
                                                    </tr>                                                    
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Page URL</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['pageurl'] .'</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; font-weight:500; color:rgba(0,0,0,.64);width:50%">
                                                        Form Name</td>
                                                        <td style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">'. $_REQUEST['Form_name'] .'</td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>';


$headers = 'MIME-Version: 1.0';
$headers = 'Content-type: text/html; charset=iso-8859-1';
$headers .= 'Reply-To:support@explainartvideos.com '.$from."\r\n" .
'From:support@explainartvideos.com '.$from."\r\n".    
    'X-Mailer: PHP/' . phpversion();
## SEND MESSGAE ##

mail( $to, $subject, $emailBody, $headers ) or die ("Unable to send email");

## SHOW RESULT PAGE ##
header( "Location: $location" );
 //echo $selectedservices;

}

else{
?>
      <script>
          alert("Website have Some Technical Issues");
          window.location.href = "$_REQUEST['base_url']";
      </script>
<?php
}
?>
