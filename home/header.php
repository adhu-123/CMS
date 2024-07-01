
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Navbar with Logo Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<style>
    .bs-example{
        margin: 0;
    }
    a:hover{
        border:2px solid black;
        background-color:white;
    }
    nav{
        margin-top: 0px;
    }
    
</style>
</head>
<body>
<div class="bs-example" style="background-color:white;color:black">
    <nav class="navbar navbar-expand-md navbar-dark">
        <a href="home.php" class="navbar-brand">
            <img src="../images/fcmw.png" height="70" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link active" style="color:black;"><b>Home</b></a>
                <a href="price.php" class="nav-item nav-link active" style="color:black;"><b>Price</b></a>
                <a href="courierMenu.php" class="nav-item nav-link" style="color:black;"><b>Courier</b></a>
                <a href="trackMenu.php" class="nav-item nav-link" style="color:black;"><b>Track</b></a>
                
                <a href="profile.php" class="nav-item nav-link" style="color:black;"><b>Profile</b></a>
                <a href="contactUS.php" class="nav-item nav-link" style="color:black;"><b>Feedback</b></a>
                
            </div>
            <div class="navbar-nav ml-auto">
                <a href="../logout.php" class="nav-item nav-link" style="color:black;"><b>LogOut</b></a>
            </div>
        </div><hr>
    </nav>
</div>
</body>
</html>
<?php include('footer.php'); ?>

  