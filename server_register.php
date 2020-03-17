<?php
    include 'db/db.php';
    session_start();
    
    $sql_server_status = "SELECT machine_id,ip_address,busy_status FROM server_status";
    $result = $con->query($sql_server_status);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($row["busy_status"] === "0")
            {
                $machine_id = $row["machine_id"];
                $ip_address = $row["ip_address"];
                
                $sql_server_update = "UPDATE serrver_status SET busy_status = '1' WHERE machine_id = $machine_id''";
                $con->query($sql_server_update);
                break;
            }
        }
    }


    if(isset($_POST['submit']))
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $raw_pass = $_POST["pass"];
        $pass = md5($raw_pass);
        $sql_check = "SELECT email,server_password FROM server_users";
        $result = $con->query($sql_check);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            
                if($row["email"]===$email)
               {
                   $check = 1;
                  break;
               }
               else
               {
                   $check = 0;
               }
            }
            echo $machine_id;
            if(true)
            {
                $raw_otp = rand(1000,9999);
                $otp = md5($raw_otp);
                $sql_update = "INSERT INTO server_users (fname,lname,email,server_username,server_password,otp) VALUES('$fname','$lname','$email','$username','$pass','$otp')";
                $con->query($sql_update);
               
                $rec = $email;
                $sub = "LiteSpeed Email Confirmation";
                $msg = "Hello ".$username.",

                        Thank You For Register on LiteSpeed

                        Your Verification Code is: ".$raw_otp."
                ";
                mail($rec,$sub,$msg);
                $_SESSION["email"] = $email;
                $new_connection =  mysqli_connect("$ip_address","server1","","litespeed");
                
                header("location:email_validation.php");
               
            }
           
    }
            
        } else {
           // echo "0 results";
        }
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteSpeed</title>
    <link rel="stylesheet" type="text/css" href="css/server_register.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style="background: #eee;">
    <div class="main-container">
        <div class="container-center">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <div class="form-container">
                <h3>Create an Account</h3>
            <!--  
              <div class="note-div">
                    <p class="text-danger text-danger-custom">Note:- </p>
                    <li class="text-danger">All Fields are required.</li>
                   <li class="text-danger">After Payment completion system will redirect to addons software installation page.</li><a href="#" class="text-primary" >Read More about addons software installation......</a> 
                   
                </div>
-->
                <div class="input-form">
                   <div class="input-box col-md-6">
                        <label>First Name</label>
                        <div class="input-box-box">
                        <form method="post">
                            <input type="text" class="form-control" name="fname" placeholder="First Name">
                        </div>
                   </div>
                   <div class="input-box col-md-6">
                        <label>Last Name</label>
                        <div class="input-box-box">
                            <input type="text" class="form-control" name="lname" placeholder="Last Name">
                        </div>
                  </div>
                    <div class="input-box col-md-12">
                        <label>Username</label>
                        <div class="input-box-box">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                </div>
                <div class="input-box col-md-12">
                    <label>Email</label>
                    <div class="input-box-box">
                        <input type="email" class="form-control col-md-12" name="email" placeholder="example@example.com">
                        <?php if($check === 1){ echo "<p class='m-0 p-0 text-danger ml-1'>Email Already Exist!!</p>";}?>
                    </div>
                </div>
                <div class="input-box col-md-12 mb-2">
                    <label>Password</label>
                    <div class="input-box-box">
                        <input type="password" class="form-control col-md-12" name="pass" placeholder="Password">
                        
                    </div>
                </div>
                <div class="col-md-2 m-auto bottom-div">
                    <input type="submit" class="btn button_submit" style="background: #c4ecff;" name="submit" value="Create an Account">
            </form>
             </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>