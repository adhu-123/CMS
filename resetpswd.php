<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Reset Password</title>
    <style>
        body{
            align-items:center;
        }
        .container{
            margin-left:400px;
            margin-top:100px;

        }
      .form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <form action="resetpswd.php" method="get" class="form-signin">
                    <input type="email" name="email" class="form-control" placeholder="Enter emailId" required><br>
                    <input type="submit" name="submit" class="btn btn-primary" class="form-control" value="Verify" />  
                </form>
            </div>
        </div>
    </div> 
    Don't have an account?  <a href="register.php">Register here</a>
</div>




    <!-- <h1 align='center' style="margin: 15px; color:green;font-weight: bold;font-family:'Times New Roman', Times, serif">THE BROKEN SAINT</h1><hr/>
    <P align='center' style="font-weight: bold;color:yellow;font-family:'Times New Roman', Times, serif">The Fastest Courier Service Ever</P>
    <div><h5 ><a href="index.php" style="float: right; margin-right:40px; color:blue; margin-top:0px">SignIn</a></h5></div>
        <div class="container" style="margin-top: 60px; width:50%;">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #273c75;">Verify The Following Details</h2>
                    <p style="color:#e84118;">To Reset Your Passwprd⮯⮯</p>
                    <form action="resetpswd.php" method="get">
                            
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter emailId" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Verify" />  
                        </div>
                        <p style="color: #e84118;">Don't have an account?⮞➤ <a href="register.php">Register here</a>.</p>
                        
                    </form>
                </div>
            </div>
        </div> -->
</body>
</html>

<?php

require_once "dbconnection.php";
// require_once "session.php";

if (isset($_REQUEST['submit'])) {

    $email = $_REQUEST['email'];

    $qryy= "SELECT * FROM `login` WHERE `email`='$email'";
    $run= mysqli_query($dbcon,$qryy);
    $row= mysqli_num_rows($run);
    if($row<1){
        ?>
        <script>alert("Opps! Email not matched..Try again or Create New One");
            window.open('resetpswd.php','_self');
        </script>   <?php
    }
    else{
        $data= mysqli_fetch_assoc($run);
        $id=$data['u_id'];
        session_start();
        $_SESSION['gid']=$id;
        
        ?>  <script>
              
            window.open('reset.php','_self');
            </script>
        <?php
        

    }
}
    
?>