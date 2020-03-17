<?php 
echo "hi";

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
        <div class="container-center mt-5">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <div class="form-container">
                <h3>Create SSH Credentials</h3>
                <form method="post">
            <!--  
              <div class="note-div">
                    <p class="text-danger text-danger-custom">Note:- </p>
                    <li class="text-danger">All Fields are required.</li>
                   <li class="text-danger">After Payment completion system will redirect to addons software installation page.</li><a href="#" class="text-primary" >Read More about addons software installation......</a> 
                   
                </div>
            -->
                <div class="input-form">
                
                    <div class="input-box col-md-12">
                        <label>SSH Username</label>
                        <div class="input-box-box">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                </div>
                <div class="input-box col-md-12">
                    <label>Password</label>
                    <div class="input-box-box">
                        <input type="password" class="form-control col-md-12" name="password" placeholder="Password" required>
                         </div>
                </div>
                <div class="input-box col-md-12 mb-2">
                    <label>Confirm Password</label>
                    <div class="input-box-box">
                        <input type="password" class="form-control col-md-12" name="confirm_password" placeholder="Confirm Password" required>
                        
                    </div>
                </div>
                <div class="col-md-2 m-auto bottom-div">
                    <input type="submit" class="btn button_submit" style="background: #c4ecff;" name="submit" value="Create">
            </form>
             </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>