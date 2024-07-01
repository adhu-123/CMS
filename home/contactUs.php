<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <title>ContactUs</title>
        <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php
include('header.php');
?>

  <div class="container">
    <div class="row contact-container">
      <div class="col-lg-12">
        <div class="card card-shadow border-0 mb-4">
        <div class="row bg-dark">
        <div class="col">
      <img src="feedback.webp"alt="img"width="100%" height="100%">
    </div>
            <div class="col-lg-8">
            <div class="contact-box p-4">
                <h2 class="text-center" style="color:white;">Drop a message</h2>
                <p class="text-center" style="color:white;">We are eager for your response..</p>
                
                <form action="contactUs.php" method="POST">
                <div class="row">
                    <div class="col-lg-7">
                    <div class="form-group mt-2">
                        <input class="form-control" name="email" type="email" placeholder="email Id" >
                    </div>
                    </div>
                    <div class="col-lg-5">
                    <div class="form-group mt-2">    
                        <input class="form-control" name="phone" type="text" placeholder="phone">
                    </div>
                    </div>
                    <div class="col-lg-8">
                    <div class="form-group mt-2">    
                        <input class="form-control" name="subject" type="text" placeholder="Subject">
                    </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mt-2">
                        <!-- change this tag name into textarea to show textarea field. Due to more textarea I got an error, so I change the name of this field -->
                        <input  class="form-control textarea" type="textarea" name="message" placeholder="Compose your message..">
                    </div>
                    </div>
                    
                    <div class="col-lg-12">
                    <div class="form-group mt-1">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Send" placeholder="Subject">
                    </div>
                    <div>
                    </div>
                    <br><br>
                </form>
            </div>
        </div>
        
</div>
</div>
</div>
</div>
</div>

</body>
</html>
<!-- starting php code -->
<?php

if (isset($_POST['send'])) {
    include('../dbconnection.php');
    //access user entered data
    $eml = $_POST['email'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    $qry = "INSERT INTO `contacts` (`email`, `subject`, `msg`) VALUES ('$eml', '$sub', '$msg')";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Thanks, we will be looking at your concern :)');
            window.open('home.php', '_self');
        </script>
    <?php
    }
}
?>