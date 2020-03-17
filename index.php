<?php
    include 'db/db.php';
    if(isset($_POST['submit']))
    {
     /*   $sql = "SELECT busy_status, machine_id, machine_ip FROM server_users";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              if($row["busy_status"] === "0")
               {
                      $m_id = $row["machine_id"];
                      $ip = $row["machine_ip"];
                      $sql_update = "UPDATE server_users SET busy_status = '1' WHERE machine_id = '$m_id'";
                        $con->query($sql_update);   
                        header("location:http://$ip:3000/form");
                     // header("location:server_register.php");
                    break; 
               }
            }
        } else {
            echo "0 results";
        }
        $con->close();
        */
        header("location:server_register.php");
    }
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
            <h2>Dedicated Server Hosting</h2>
        </div>
        <div class="card-section">

            <div class="center-section">
                <h2>Featured Dedicated Servers</h2>
                <div class="card-1">
                    <form method="post">
                    <p class="card-heading">Xeon E3-1230 v5</p>
                    <p class="rate-card"><i class="fa fa-rupee"></i>45.0</p>
                    <p class="left-card">Save 22% on 1st Month</p>
                    <input type="submit" name="submit" Value="Get Started" class="btn button-getstarted"> 
                    <div class="specs-all">
                        <p class="specs"><i class="fa fa-check check-box"></i> 4 Cores @ 3.4GHz</p>
                        <p class="specs"><i class="fa fa-check check-box"></i> 8 GB DDR4</p>
                        <p class="specs"><i class="fa fa-check check-box"></i> 500GB HDD</p>
                    </div>
                </div>
                <div class="card-1">
                    <p class="card-heading">Xeon E-2136</p>
                    <p class="rate-card"><i class="fa fa-rupee"></i>45.0</p>
                    <p class="left-card">Only 3 in stock!</p>
                    <input type="submit" name="submit" Value="Get Started" class="btn button-getstarted"> 

                    <div class="specs-all">
                        <p class="specs"><i class="fa fa-check check-box"></i> 6 cores @ 3.3 GHz</p>
                        <p class="specs"><i class="fa fa-check check-box"></i> 32 GB DDR4</p>
                        <p class="specs"><i class="fa fa-check check-box"></i> 2 x 480 GB SSD</p>
                    </div>
                </div>
                <div class="card-1">
                    <p class="card-heading">Dual Xeon E5-2620</p>
                    <p class="rate-card"><i class="fa fa-rupee"></i>45.0</p>
                    <p class="left-card">Only 1 in stock!</p>
                    <input type="submit" name="submit" Value="Get Started" class="btn button-getstarted"> 

                    <div class="specs-all">
                        <p class="specs"><i class="fa fa-check check-box"></i> Dual 6 cores @ 2 GHz/p>
                        <p class="specs"><i class="fa fa-check check-box"></i> 32 GB DDR3</p>
                        <p class="specs"><i class="fa fa-check check-box"></i> 2 x 1 TB HDD</p>
                    </div>

                </div>
            </div>       
        </div>
    </div>
</form>
    <div class="footer container-fluid">
        <p>Copyright &copy; All rights reserved. Made with <i class="fa fa-heart iclass"></i> by Ozonedigital</p>
    </div>
</body>
</html>