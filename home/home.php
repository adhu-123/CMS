<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <style>
        body
        {
        background-image:url('background.jpg');
        background-repeat:no-repeat;
        background:cover;
        }
        .bs-example{
            background-color:grey;
        margin: 0;
        font-size:16px;
        display:block;
        text-decoration:none;

    }
    a:hover{
        border:2px solid black;
    }
    
    
    
    </style>
</head>
<body style="background-color:white;">
    <?php include('header.php'); ?>
    <div align='center'class="container" style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
   
    <h1 style="color:#E20F5C;font-style:italic;text-decoration:underline;"><b>RushRide Couriers</b></h1>
        <img src="../images/fcmw.png" alt="img" width="100px" height="100px" style="border:1px solid black">   
        <h4 style="color:white"><b>The fastest courier service of India</b></h4><br><br>
   
        
        <h2 style="color:purple"><b>Send Your Courier Online</b></h2>
        <br>
        <!-- <h5 style="color: #061FA8;font-style:italic;"><b>You click, we collect, book online and we will come to you and 
            pickup you parcel,<span><br></span> then deliver it within the frame you specify.</b>
    </h5> -->
  
   
    <br><br><br><br><br><br><br><br><br><br>
    </div><br> 
</body>
</html>