
<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: p6.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateprofile</title>
    <style>
        body{
            margin-left:300px;
            margin-right:300px;
            background-color:aqua;
        }
        label{
            font-weight:bold;
        }
        input{
            width:100%;
            height:40px;
        }
    </style>
</head>


<body>
    <Label style="text-align:center;font-style:italic;font-weight:bold;"><h1>Update Profile</h1></Label>
    <form action="emp6.php" method="POST"enctype="multipart/form-data">
    <div style="overflow-x:auto;">
    <label>Employee Name:</label><br>
    <input  name="name" type="name" placeholder="Employee Name"required><br><br>                
    <label for="">Date Of Birth:</label><br>
    <input  name="date" type="date" placeholder="Date of Birth"required><br><br>              
    <label for="">Address:</label><br>
    <input  name="address" type="address" placeholder="Address"required><br><br>         
    <label for="">Parents:</label><br>
    <input name="parents" type="parents" placeholder="Parents"required><br><br>
    <label for="">Martinal Status:</label><br>
    <input name="status" type="status" placeholder="Matirnal Status"required><br><br>
    <label for="">Profession:</label><br>
    <input name="profession" type="profession" placeholder="Profession"required><br><br>
    <label for="">Experience:</label><br>
    <input name="experience" type="experience" placeholder="Experience"required><br><br>
    <label for="">Nationality:</label><br>
    <input name="nationality" type="nationality" placeholder="Nationality"required><br><br>
    <label for="">Qualification:</label> <br>
    <input name="qualification" type="qualification" placeholder="Qualification"required><br><br>            
    <input type="submit" name="submit" value="Update" style="width:70px;background-color:grey;height:30px;"> 
      
</div>
</form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    include('../dbconnection.php');
    //access user entered data
    $name = $_POST['name'];
    $date= $_POST['date'];
    $address= $_POST['address'];
    $parents= $_POST['parents'];
    $married = $_POST['status'];
    $profession = $_POST['profession'];
    $experience = $_POST['experience'];
    $nationality = $_POST['nationality'];
    $qualification = $_POST['qualification'];

    $qry="UPDATE `employees` SET `name`='$name',`date_of_birth`='$date',`address`='$address',`parents`='$parents',`married`='$married',`profession`='$profession',`experience`='$experience',`nationality`='$nationality',`qualification`='$qualification' WHERE `emp_id`='SUP400'";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Profile updated Successfully:)');
            window.open('p6.php', '_self');
        </script>
    <?php
    }
}
?>
