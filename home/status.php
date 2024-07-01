<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
<?php include('header.php');
    include('../dbconnection.php');
    $idd = $_GET['sidd'];

    $qryy= "SELECT * FROM `courier` WHERE `c_id`='$idd'";
    $run= mysqli_query($dbcon,$qryy);
    $data=mysqli_fetch_assoc($run);
    $stdate = $data['date'];
    $tddate = date('Y-m-d');
    $ladate = date('Y-m-d',strtotime('+1 day',strtotime($tddate)));

    if($stdate==$tddate){
        ?>
        <h3 style="margin: 100px;text-align:center;color:#0066ff;">Status --> <span style="color:#E20F5C;"> Parcel accepted</span></h3>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:aqua;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
        </div>
         <?php 
    }
    elseif($stdate==$ladate){
        ?>
        <h3 style="margin: 100px;text-align:center;color:#0066ff;">Status --> <span style="color:#E20F5C;"> Ready to pickup</span></h3>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:aqua;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
        </div>
         <?php 
    }
    else{
        ?>
        <h3 style="margin: 100px;text-align:center;color:#0066ff;">Status --> <span style="color:#E20F5C;"> Items Delivered..HAVE A NICE DAY</span></h3>
        <br/><hr/>
        <div align='center'>
        <button onclick="window.location.href='trackMenu.php'" style="background-color:aqua;height:60px;width:130px;border-radius:15px;cursor:pointer">GoBack</button>
        </div>
        <?php
    }
?>


