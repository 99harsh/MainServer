
<?php
    include 'db/db.php'; 
    session_start();
    $order_id = $_SESSION["ORDER_ID"];
    $amount =  $_SESSION["TXN_AMOUNT"];
    $customer_id = $_SESSION["CUST_ID"];
    $email = $_SESSION["email"];
    $user_name = $_SESSION["username"];
    
    $sql = "INSERT INTO payment_checkout (email,order_id,cust_id,amount) VALUES('$email','$order_id','$customer_id','$amount')";
    $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteSpeed</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/confirm_payment.css">
    
</head>
<body>
    <div class="container-fluid ctn-fl float-left">
     <div class="row">
        <div class="col-md-2 float-left">
            <h2>LiteSpeed</h2>
        </div>
        <div class="col-md-8 float-left nav-top">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Free Plans</a></li>
                <li><a href="#">Shared Hosting</a></li>
                <li><a href="#">VPS Hosting</a></li>
                <li><a href="#">Dedicated Hosting</a></li>
                <li><a href="#">About US</a></li>
            </ul>
        </div>
        <div class="col-md-2 float-left nav-top-client">
            <a href="#"><i class="fa fa-user"></i> Hello Harsh</a>
        </div>
    </div>
</div>
    <div class="container center-body">
       <div class="row">
        <div class="col-md-6 div-wohoo m-auto">
            <img class="float-left" src="https://img.icons8.com/clouds/200/000000/handshake.png"/>
            <h2 class="float-left  mt-2">Wohooo!!!!</h2>
            
        </div>
     </div>
     <h5 class="text-center mt-3">Customer ID: <?php echo $_SESSION["ORDER_ID"]?></h5>
     <div class="row">
         <div class="col-md-12 div-thankyou">
             
             <div class="row">
                 <div class="col-md-10 m-auto content-thankyou">
                     <p class="heading-para">Hi <?php echo $user_name;?>,</p>
                     <p class="thanks-para">Thank you for using the LiteSpeed Quater(6 Months) Server Plan!! We've successfully processed your payment of <i class="fa fa-rupee"></i>550.
                         You can use your server from 16-03-2020 to 16-09-2020.

                     </p>
                     <p class="thanks-para">
                         We've sent you an email on <?php echo $_SESSION["email"]; ?> of payment recipt. For customer care support call us on toll free number (+91 12345 6789) or Mail Us: info@litespeed.in. 
                     </p>
                 </div>
                 <div class="col-md-3 m-auto  pb-4">
            <button class="btn button-panel m-auto" onclick="window.open('Panel_user/main_panel.html','_SELF')">Go to the LiteSpeed Panel</button>
        </div>
             </div>
         </div>
         
     </div>
    </div>
        <div class="footer container-fluid pt-3" style="height: 85px;">
            <p>Copyright &copy; All rights reserved. Made with <i class="fa fa-heart iclass"></i> by Ozonedigital</p>
        </div>
    
    </body>
    </html>
