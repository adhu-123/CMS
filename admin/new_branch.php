<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <title>Adding new Branch</title>
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
                <h2 class="text-center">Insert a new Branch</h2>
                
                <form action="new_branch.php" method="POST">
                <div class="form-group">
                        <input class="form-control" pattern="[0-9]{2}" name="id" type="id" placeholder="Id" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control"pattern="[0-9]{6}"  name="branch_code" type="branch_code" placeholder="branch_code"required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="street" type="street" placeholder="street"required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="city" type="city" placeholder="city"required>
                    </div> 
                    <div class="form-group">
                        <input class="form-control" name="state" type="state" placeholder="state"required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" pattern="[0-9]{6}" name="zip_code" type="zip_code" placeholder="zip_code"required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="country" type="country" placeholder="country" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" pattern="080-[0-9]{8}" name="contact" type="contact" placeholder="contact"required>
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
    $id = $_POST['id'];
    $branch_code = $_POST['branch_code'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $country = $_POST['country'];
    $contact = $_POST['contact'];


    $qry = "INSERT IGNORE INTO `branches` (`id`, `branch_code`,`street`,`city`,`state`,`zip_code`,`country`,`contact`) VALUES ('$id', '$branch_code','$street','$city','$state','$zip_code','$country','$contact')";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Branch successfully added:)');
            window.open('branches.php', '_self');
        </script>
    <?php
    }
}
?>