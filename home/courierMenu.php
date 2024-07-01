<!-- for 'courier' navbar, courier placing page -->
<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}

?>
<?php
include('header.php');
$email = $_SESSION['emm'];
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <style>
       
    </style>
</head>

<body style="background-color:white;">
    <form action="courierMenu.php" method="POST" enctype="multipart/form-data">
        <div style="overflow-x:auto;">
            <table style="margin-left:350px;margin-right:300px;font-weight:bold;border-spacing: 5px 15px;">
                <th colspan="4" style="text-align: center;background-color: white; width: 140px; height: 50px;">Fill The Details Of Sender & Receiver</th>
                <tr>
                    <td colspan="4" style="text-align: center;">
                    <br>
                    </td>
                </tr>
                <tr style="text-align: center;">
                    <th colspan="2">SENDER</th>
                    <th colspan="2">RECEIVER</th>
                </tr>
                <tr>
                    <td colspan="4">
                        <br>
                    </td>
                </tr>
                <tr>
                    <th colspan="2"> </th>
                    <th colspan="2"> </th>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="sname" placeholder="Sender FullName" required></td>

                    <td>Name:</td>
                    <td><input type="text" name="rname" placeholder="Sender FullName" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="semail" value="<?php echo $email; ?>" readonly></td>

                    <td>Email:</td>
                    <td><input type="text" name="remail" pattern="[a-zA-Z]+@gmail.com" placeholder="Receiver EmailId" required></td>
                </tr>
                <tr>
                    <td>PhoneNo.:</td>
                    <td><input type="text" name="sphone" pattern="[7-9]{1}[0-9]{9}" placeholder="sender number" required></td>

                    <td>PhoneNo.:</td>
                    <td><input type="text" name="rphone"  pattern="[7-9]{1}[0-9]{9}" placeholder="receiver number" required></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="textfield" name="saddress" placeholder="sender address" required></td>

                    <td>Address:</td>
                    <td><input type="textfield" name="raddress" placeholder="receiver address" required></td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td>Weight:</td>
                    <td><input type="number" name="wgt" placeholder="weights in kg" required></td>

                    <td>Payment Id:</td>
                    <td><input type="number" name="billno" pattern="[0-9]{2}" placeholder="enter transition num" required></td>
                </tr>
                <tr>
                    <!-- <td>Date:</td><td><input type="date" name="date"></td> -->
                    <td>Date:</td>
                    <td><input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly /></td>
                    <td>Items Image:</td>
                    <td><input type="file" name="simg" ></td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><input type="submit" name="submit" value="Place Order" style="background-color:powderblue; border-radius: 15px; width: 140px; height: 50px;cursor:pointer;"></td>
                </tr>
            </table>
        </div>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) { //if we'll not give this,it'will submit from with zero values.

    include('../dbconnection.php');

    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $semail = $_POST['semail'];
    $remail = $_POST['remail'];
    $sphone = $_POST['sphone'];
    $rphone = $_POST['rphone'];
    $sadd = $_POST['saddress'];
    $radd = $_POST['raddress'];
    $wgt = $_POST['wgt'];
    $billn = $_POST['billno'];
    $originalDate = $_POST['date'];
    $newDate = date("Y-m-d", strtotime($originalDate));
    $imagenam = $_FILES['simg']['name'];
    $tempnam = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempnam, "../dbimages/$imagenam");

    $qry = "INSERT IGNORE INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`,`date`,`u_id`) VALUES ('$sname', '$rname', '$semail', '$remail', '$sphone', '$rphone', '$sadd', '$radd', '$wgt', '$billn', '$imagenam', '$newDate','$uid');";
    $run = mysqli_query($dbcon, $qry);

    if ($run == true) {

    ?> <script>
            alert('Order Placed Successfully :)');
            window.open('courierMenu.php', '_self');
        </script>
    <?php
    }
}

?>