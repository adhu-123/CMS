
<!-- when admin click delete data link, page with filter options-->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist//css/bootstrap-min.css">
<style>
    th{
        width:150px;
        text-align:center;
        border:1px solid black;
        padding:5px;
    }
</style>
</head>
<body style="background-color:white;color:black;">
    


<div class="admintitle">
    <div>
    <h5 ><a href="dashboard.php" style="position:relative;float: left; margin-left:20px; margin-top:10px;color:aliceblue;text-decoration:none;">BackToDashboard</a></h5>
    <h5 ><a href="logout.php" style="position:relative;float: left; margin-left:20px; margin-top:10px;color:aliceblue;text-decoration:none;">LogOut</a></h5>
    </div>
<hr>
<h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;color:white;">Branches</h1>
</div>


<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>

<?php
include('head.php');
?>






<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<table  width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-spacing: 5px 5px;"class="table tabe-hover table-bordered" id="list">
				<!-- <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup> -->
				<thead>
					<tr style="background-color: grey;color:white;">
						<th class="text-center">id</th>
						<th>email</th>
						<th>subject</th>
						<th>message</th>
					</tr>
				</thead>
				<tbody>
                <?php
    include('../dbconnection.php');

    $qryd= "SELECT * FROM `contacts`";
    $run= mysqli_query($dbcon,$qryd);

    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
        <tr align="center">
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['subject']; ?></td>
            <td><?php echo $data['msg']; ?></td>
        </tr>
        <?php
        }
    }
    ?>
			</table>
		</div>
	</div>
</div>
<style>
	table td{
		vertical-align: middle !important;
	}
</style>
