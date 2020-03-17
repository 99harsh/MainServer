<?php
    include 'db/db.php';
    session_start();
    if(isset($_POST["submit"]))
    {
        
        $email = $_SESSION['email'];
        $confrim_otp = $_POST["confirm_otp"];
        $otp = md5($confrim_otp);
        $sql_check = "SELECT email,server_username,otp FROM server_users WHERE email = '$email'";
        $result = $con->query($sql_check);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                
                if($otp === $row["otp"])
                {
                    $sql_update = "UPDATE server_users SET active_status = '1' WHERE email = '$email'";
                    if($con->query($sql_update) === TRUE)
                    {
                        $username = $row["server_username"];
                        echo $username;
                       
                        $_SESSION["username"] = $username;
                        header("location:server_config.php");
                    }
                }
            }
        }
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
    <link href="css/email_validation.css" rel="stylesheet" type="text/css">
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
            <a href="#"><i class="fa user"></i><?php echo $username; ?></a>
        </div>
    </div>
    <div class="container ">
        <div class="top-section-otp float-left mt-5">
            <img class="float-left" src="https://img.icons8.com/officel/80/000000/password-check.png"/>
            <h2>Validate OPT(One Time Passcode)</h2>
        </div>
        <div class="top-section-content mt-5 float-left mb-5">
            <p>A One Time Passcode has been sent to hagrawal121@gmail.com</p>
            <p>Please enter the OPT below to verify your Email Address. If you cannot see the email from "LiteSpeed" in your inbox make sure to check your SPAM folder or you can click to Resend OPT option.</p>
            <div class="col-md-6 m-auto">
                <form method="post">
                    <input name="confirm_otp" type="text" class="form-control col-md-8 float-left ml-5 mt-4" placeholder="Enter OTP">
                    <input type="submit" value="Validate" name="submit" class="btn custom-button ml-3 mt-4">
                </form>
            </div>
            <div class="col-md-12 mt-3 mb-5 text-center">
                <a href="">Click here to Resend OTP</a>
            </div>
        </div>
    </div>

    <div class="footer container-fluid">
        <p>Copyright &copy; All rights reserved. Made with <i class="fa fa-heart iclass"></i> by Ozonedigital</p>
    </div>
</body>
</html>
