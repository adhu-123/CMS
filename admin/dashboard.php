<!-- admin dashbord page with options for admin -->
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist//css/bootstrap-min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['ID', 'Life Expectancy', 'Fertility Rate', 'Region',     'Population'],
        ['CAN',    80.66,              1.67,      'North America',  33739900],
        ['DEU',    79.84,              1.36,      'Europe',         81902307],
        ['DNK',    78.6,               1.84,      'Europe',         5523095],
        ['EGY',    72.73,              2.78,      'Middle East',    79716203],
        ['GBR',    80.05,              2,         'Europe',         61801570],
        ['IRN',    72.49,              1.7,       'Middle East',    73137148],
        ['IRQ',    68.09,              4.77,      'Middle East',    31090763],
        ['ISR',    81.55,              2.96,      'Middle East',    7485600],
        ['RUS',    68.6,               1.54,      'Europe',         141850000],
        ['USA',    78.09,              2.05,      'North America',  307007000]
      ]);

      var options = {
        title: 'Customer Satisfaction according to Region (current)' +'   '+
          ' X=Products Sale, Y=customers, Bubble size=sales, Bubble color=Region',
        hAxis: {title: 'Products Sale'},
        vAxis: {title: 'Customers'},
        bubble: {textStyle: {fontSize: 11}}
      };

      var chart = new google.visualization.BubbleChart(document.getElementById('series_chart_div'));
      chart.draw(data, options);
    }
    </script>

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Excellent',     11],
          ['Very good',      2],
          ['Good',  2],
          ['Bad', 2],
          ['Very bad',    7]
        ]);

        var options = {
          title: 'Customer Review'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>

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

<style>
    body{
        color:white;
    }
     li:hover{ 
        background-color:grey;
     }
     
    
</style>

<body>

<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-dark pl-0" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat"> 
                <h1><center>Admin</center></h1> 
                 <hr>
                <li class="nav-item"><h4><a class="nav-link" href="dashboard.php"><b>Dashboard</b></a></h4></li>
                <li class="nav-item"><h5><a class="nav-link" href="users.php" >
                <i class="bi bi-people-fill"></i>
                <span>  </span>
                <b>Users</b></a></h5></li>
                <li class="nav-item"><h5><a class="nav-link" href="..\staff\welcome.php" target="_blank">
                <i class="bi bi-person-vcard"></i>
                <span>  </span>
                <b>Update Staff Profile</b></a></h5></li>
                <li class="nav-item"><h5><a href="branches.php" class="nav-link">
                <i class="bi bi-buildings"></i>
                <span>  </span>
                <b>Branch</b></a></h5></li>
                <li class="nav-item"><h5><a href="branch_staff.php" class="nav-link">
                <i class="bi bi-person-square"></i>
                <span>  </span>
                <b>Branch Staff</b></a></h5></li>
                <li class="nav-item"><h5><a class="nav-link" href="updatedata.php">
                <i class="bi bi-save-fill"></i>
                <span>  </span>
                <b>Update Data</b></a></h5></li>
                <li class="nav-item"><h5><a class="nav-link" href="deletedata.php">
                <i class="bi bi-trash-fill"></i>
                <span>  </span>
                <b>Delete Data</b></a></h5></li>
                <li class="nav-item"><h5><a class="nav-link" href="deleteusers.php">
                <i class="bi bi-trash3"></i>
                <span>  </span>
                <b>Delete User</b></a></h5></li>  
                <li class="nav-item"><h5><a class="nav-link" href="feedback.php">
                <i class="bi bi-bell-fill"></i>
                <span>   </span><b>Feedback</b></a></h5></li>
                <li class="nav-item"><h5><a class="nav-link" href="logout.php">
                <i class="bi bi-box-arrow-left"></i>
                <span>  </span>
                <b>Logout</b></a></h5></li>

                <br><br><br><br><br><br><br>
            </ul>
        </div>
      
        <!--/col-->

        <div class="col main pt-5 mt-3">
            <div class="row mb-3">
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-building fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Total Branches</h6>
                            <h1 class="display-7">6</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"> Total Staff</h6>
                            <h1 class="display-4">4</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-body bg-warning">
                            <div class="rotate">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Users</h6>
                            <h1 class="display-4">12</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                            <i class="bi bi-cart3 fa-4x"></i></i>
                            </div>
                            <h6 class="text-uppercase">Total Orders</h6>
                            <h1 class="display-4">18</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-body bg-primary">
                            <div class="rotate">
                                <i class="fa fa-boxes fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Delivered</h6>
                            <h1 class="display-4">15</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-primary h-100">
                        <div class="card-body bg-secondary">
                            <div class="rotate">
                            <i class="bi bi-truck-front-fill fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">On the way</h6>
                            <h1 class="display-4">2</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 py-2">
                <div id="series_chart_div" style="width: 600px; height: 500px;"></div>
            </div>
            <div class="col-xl-4 col-sm-6 py-2">
                <div id="piechart" style="width: 600px; height: 500px;"></div>
            </div>
    </div>

            <!--/row-->
<!--/.container-->
<footer class="container-fluid">
    <p class="text-right small">@Admin</p>
</footer>

</body>
</html>

