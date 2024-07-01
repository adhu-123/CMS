<?php

require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `login` WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
?>
        <script>
            alert("Opps! plz Enter Your Username and Pswd again..");
            window.open('index.php', '_self');
        </script> <?php
                } else {
                    $data = mysqli_fetch_assoc($run);
                    $id = $data['u_id'];    //fetch id value of user
                    $email = $data['email'];
                    $_SESSION['uid'] = $id;   //now we can use it until session destroy
                    $_SESSION['emm'] = $email;
                    ?>
        <script>
            alert("WELCOME");
            window.open('home/home.php', '_self');
            // changes made here
        </script> <?php

                }
            }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist//css/bootstrap-min.css">  
    <style>
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
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
h5{
    align-items:center;
    display:vertical;
   
}
    </style>
</head>

<body>
<div class="wrapper">
    
    <h1 style="text-align:center;color:#E20F5C;font-style:italic;text-decoration:underline;">
    <img src="images/fcmw.png" alt="img" width="80px" height="80px" style="border:1px solid black;margin: 15px;align-content:center"><b>RushRide Couriers</b><br><hr/><br></h1>

    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
            <h5><a href="admin/adminlogin.php" style="float: left;margin-left:40px;  color:black; margin-top:0px;padding:4px;text-decoration:none;"><b><i class="fa fa-user"></i>AdminLogin</b></a></h5>
            <h5><a href="staff/stafflogin.php" style="float: left;margin-left:80px;  color:black; margin-top:0px;padding:4px;text-decoration:none;"><b><i class="fa fa-user"></i>StaffLogin</b></a></h5>
            <br>
                <img class="profile-img" src="https://cdn-icons-png.freepik.com/512/552/552721.png" alt="img">
    
                <form action="" method="post" class="form-signin">
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="resetpswd.php" class="pull-right need-help">Forgot password? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="register.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
    
    </div>
    <br><br><br><br><br><br>
</body>

</html>