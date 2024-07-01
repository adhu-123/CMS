<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }

?>
<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body style="background-color:white">
    <table width='30%' border="5px solid" style="margin-top:30px;margin-left:auto ;margin-right:auto ;font-weight:bold;border-spacing: 10px 10px;border-collapse: collapse;">
    <tr style="background-color: #ffffff;font-size:30px">
    <th>Weight in Kg</th><th>Price</th>
    </tr>
    <tr>
    <td>0-1</td><td>120</td>
    </tr>
    <tr>
    <td>1-2</td><td>200</td>
    </tr>
    <tr>
    <td>2-4</td><td>250</td>
    </tr>
    <tr>
    <td>4-5</td><td>300</td>
    </tr>
    <tr>
    <td>5-7</td><td>400</td>
    </tr>
    <tr>
    <td>7-8</td><td>500</td>
    </tr>
    <tr>
    <td>8-9</td><td>580</td>
    </tr>
    <tr>
    <td>9-10</td><td>650</td>
    </tr>
    <tr>
    <td>10-above</td><td>800</td>
    </tr>
    </table>
    <h4 align="center" style="margin-top:20px;color:brown;"> As per your courier's weight pay the amount to:</h4>
    <div style="margin-left:45% ;margin-right:auto ;font-weight:bold;">
    <ol>
    <li>UPI: lmadhuri1304@sbi.com</li>
    <li>GPay: 6362786223</li>
    <li>PhnPay: 6362786223</li>
    </ol>
    </div>
</body>
</html>