<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <title>Adding new staff</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php
include('head.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mail-form">
                <h2 class="text-center">Insert a new staff</h2>
                
                <form action="new_staff.php" method="POST">
                <div class="form-group">
                        <input class="form-control" name="staff_name" type="staff_name" placeholder="name" >
                    </div>
                    <div class="form-group">
                        <input class="form-control"pattern="[0-9]{2}" name="staff_id" type="id" placeholder="id" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" pattern="[A-Za-z]+@gmail.com"  name="email" type="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" pattern="[7-9]{1}[0-9]{9}" name="phonenumber" type="phonenumber" placeholder="number">
                    </div> 
                    <div class="form-group">
                        <input class="form-control" name="city" type="city" placeholder="city">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="state" type="state" placeholder="state">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="country" type="country" placeholder="country">
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="add" value="Add" placeholder="Subject">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!-- starting php code -->
<?php

if (isset($_POST['add'])) {
    include('../dbconnection.php');
    //access user entered data
    $staff_name = $_POST['staff_name'];
    $staff_id = $_POST['staff_id'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $qry = "INSERT IGNORE INTO `staff` (`staff_name`, `staff_id`,`emailid`,`phonenumber`,`city`,`state`,`country`) VALUES ('$staff_name', '$staff_id','$email','$phonenumber','$city','$state','$country')";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Staff successfully added:)');
            window.open('branch_staff.php', '_self');
        </script>
    <?php
    }
}
?>