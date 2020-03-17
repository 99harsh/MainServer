<?php
	session_start();
        if(isset($_POST["submit"]))
        {
            $price = $_POST["select-price"];
            $checkout_amount = 0;
            if($price === "month")
            {   
              

                $checkout_amount = 550;
            }
            else if($price === "quater")
            {
               
                $checkout_amount = 650;
            }
            else
            {
                
                $checkout_amount = 850;
            }
            echo $checkout_amount;
            $_SESSION["checkout_amount"] = $checkout_amount;
            header("location:PaytmKit/Txntest.php");
        }


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteSpeed</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/server_config.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid ctn-fl float-left">
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
            <a href="#"><i class="fa fa-lock"></i> Client Area</a>
        </div>
    </div>
    <div class="main-body">
        <div class="top-section">
            <img class="float-left" src="https://img.icons8.com/cute-clipart/64/000000/server.png">
            <h2>Dedicated Server Specification</h2>
        </div>
        <div class="center-section">
           <div class="small-details">
            <img class="float-left mr-2" src="https://img.icons8.com/cotton/150/000000/server.png">
            <p class="model">Model</p>
            <p class="model-name">Xeon E3-1230 v5</p>
            <p class="subscription">
                Subscription
            </p>
            <form method="post">
            <select id="select-options" class="form-control col-2" onchange="val()" name="select-price">
                <option value="month">Monthly (1 month)</option>
                <option value="quater">Quaterly (6 months)</option>
                <option value="year">Yearly (12 months)</option>
            </select>
            
           </div>
           <div class="center-center-specs">
               <li>
                   <span class="specs-heading">CPU</span>
                   <p class="specs-list">Xeon E3-1230 v5 with 4 cores / 8 threads @ 3.4 GHz (3.8 GHz)</p>
               </li>
               <li>
                <span class="specs-heading">RAM</span>
                <p class="specs-list">
                    8 GB DDR4 • ECC Server Grade</p>
            </li>
            <li>
                <span class="specs-heading">Disk Drive(s)</span>
                <p class="specs-list">500 GB HDD SATA</p>
            </li>
            <li>
                <span class="specs-heading">Public network
                </span>
                <p class="specs-list">1000 Mbps

                </p>
            </li>
            <li>
                <span class="specs-heading">Bandwidth</span>
                <p class="specs-list">
                    10 TB/mo</p>
            </li>
            <li>
                <span class="specs-heading">Uptime</span>
                <p class="specs-list">
                    99%</p>
            </li>
            <li>
                <span class="specs-heading">Datacenter</span>
                <p class="specs-list">
                   Anand Nagar Mhow</p>
            </li>
            <li>
                <span class="specs-heading">Dedicated IPs</span>
                <p class="specs-list">1 IP</p>
            </li>
            <div class="total-price">
                <p>Total: <span class="ml-0" id="price-span">520.00</span> <i class="fa fa-rupee"> </i></p>
                <button class="btn button-checkout" name="submit">Checkout</button>
               <!-- <button class="btn button-checkout">Cancel</button>-->
               </form>
            </div>

           </div>
        </div>
    </div>
    <div class="footer container-fluid">
        <p>Copyright &copy; All rights reserved. Made with <i class="fa fa-heart iclass"></i> by Ozonedigital</p>
    </div>
    
</body>
</html>

<script>
     
    
    function val()
    {
       var select = document.getElementById("select-options").value;
       var price = "";
        if(select == "month")
        {
             price = "520.00";
             
            
        }
        else if(select == "quater")
        {
            price = "650.00";
        }
        else
        {
            price = "850.00";
        }
        var para = document.getElementById("price-span").innerText = price;
    }

    
</script>