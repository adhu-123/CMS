<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: p1.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Doe</title>
    <style>
        header{
            margin:auto;
            text-align:center;
            border:1px;
            font-size:40px;
            font-family:verdana;
            background-color:powderblue;
            color:purple;
        }
        img{
            border:2px solid black;
            border-radius:30%;
            float:left;
            margin-right:20px;
            width:300px;
            height:300px;
        }
        .text-container{
            margin-left: 20px;
        }
        footer {
  text-align: center;
  padding: 3px;
  background-color:lightblue ;
  color: white;
}
.links{
float:right;
}
    </style>
</head>
<?php
 include('../dbconnection.php');
 

 $qryy= "SELECT * FROM `employees` WHERE `emp_id`='PD1001'";
 $run= mysqli_query($dbcon,$qryy);
 $data=mysqli_fetch_assoc($run);
?>
<body>

<div style="overflow-x:auto;">
<header>Srinivas</header><br><br><br>
<img src="../staff/image1.jpeg" alt="img1">
<div class="text-container">
   <h3> <p><b><span style="color:green;"> Employee Name:</span>   <?php echo $data['name']; ?></b></p></h3>
   <h3> <p><b><span  style="color:green;"> Employee ID: </span> <?php echo $data['emp_id']; ?></b></p></h3>
   <h3> <p><b><span style="color:green;"> Qualification:</span>   <?php echo $data['qualification']; ?></b></p></h3>
   <h3> <p><b><span  style="color:green;"> Profession: </span> <?php echo $data['profession']; ?></b></p></h3>
   <h3> <p><b><span style="color:green;"> Nationality:</span>   <?php echo $data['nationality']; ?></b></p></h3>
   <h3> <p><b><span  style="color:green;"> Experience: </span> <?php echo $data['experience']; ?></b></p></h3>

    <p><b><?php echo $data['name']; ?></b> was born on <b><?php echo $data['date_of_birth']; ?></b> in <?php echo $data['address']; ?>. His parents are <?php echo $data['parents']; ?> , currently he is <?php echo $data['married']; ?>. </p>
    <p><?php echo $data['about']; ?></p>
</div>
<p>
<ul>
<li>Understanding and representing user needs.</li>
<li>Monitoring the market and developing competitive analyses.</li>
<li>Defining a vision for a product.</li>
<li>Aligning stakeholders around the vision for the product. </li>
<li>Prioritizing product features and capabilities.</li>
<li>Creating a shared brain across larger teams to empower independent decision-making.</li>
</ul>
<br><br><br><br>
<div class="links">
<a href="../staff/welcome.php"style=" position: relative;
    text-decoration:none;
    color:red;
    margin:auto;
    border:2px;
    padding:3px;  
    background-color:pink;">Back to home</a>
<a href="emp1.php" style=" position: relative;
    text-decoration:none;
    color:red;
    margin:auto;
    border:2px;
    padding:3px;  
    background-color:pink;">Update Profile</a>
</div><br><br>
<footer> <p>Author: Madhuri &Deepika<br>
    <a href="mailto:lmadhuri913@gmail.com">lmadhuri913@gmail.com</a></p></footer>

</p>
</div>
</body>
</html>