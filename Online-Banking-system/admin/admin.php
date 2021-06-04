<?php 
    include"connect.php";
    $result = 0;
    $qry="SELECT SUM(Amdeposit) As TOTAL_AMOUNT_IN_BANK from customer";
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result = $row['TOTAL_AMOUNT_IN_BANK'];
    }

    // select max(Amdeposit) AS MAX_AMOUNT from customer;
    $result1 = 0;
    $qry="SELECT max(Amdeposit) AS MAX_AMOUNT from customer";
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result1 = $row['MAX_AMOUNT'];
    }

    $result2 = 0;
    $qry="SELECT MIN(AMdeposit) AS MIN_AMOUNT from customer";
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result2 = $row['MIN_AMOUNT'];
    }
     $result3 = 0;
    $qry="select avg(amdeposit) AS AVG_AMOUNT from customer";
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result3 = $row['AVG_AMOUNT'];
    }
     $result4 = 0;

    $qry="SELECT SUM(loanamount) As TOTAL_AMOUNT_IN_BANK from businessloan";
    echo $qry;
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result4 = $row['TOTAL_AMOUNT_IN_BANK'];
    }

    // select max(Amdeposit) AS MAX_AMOUNT from customer;
    $result5 = 0;
    $qry="SELECT max(loanamount) AS MAX_AMOUNT from businessloan";
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result5 = $row['MAX_AMOUNT'];
    }

    $result6 = 0;
    $qry="SELECT MIN(loanamount) AS MIN_AMOUNT from businessloan";
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result6 = $row['MIN_AMOUNT'];
    }
     $result7 = 0;
    $qry="select avg(loanamount) AS AVG_AMOUNT from businessloan";
    $res = $cont->query($qry);
    while($row= $res->fetch_assoc())
    {
        $result7 = $row['AVG_AMOUNT'];
    }
    
 ?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">MAC E-Banking</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        

                  
                      
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Ahsan Chughtai </h5>
                                    <span class="status"></span><span class="ml-2">Administrator</span>
                                </div>
                                <a class="dropdown-item" href="../Front-page/index.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="admin.php" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    
                           
                            <li class="nav-item">
                                <a class="nav-link" href="pages/Loan-Request.php"data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Loan Request</a>
                            </li>
                              <li class="nav-item ">
                                <a class="nav-link" href="pages/Delete-Account.php" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Delete Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/Zakat-Account.php" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Zakat Detection </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/Zakat-Accountt.php" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Zakat Account </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/Transaction-history.php" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-id-card"></i>Transaction History</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="pages/Loan-history.php" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-id-card"></i>Loan History</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Dashboard</h2>
                               
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Fornt Page </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Amount in Bank</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1" ><?php echo $result ?></h1>
                                        </div>
                                        <div id="sparkline-revenue"></div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Highest Amount Account</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $result1 ?></h1>
                                        </div>
                                     	<div id="sparkline-revenue2"></div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Minimum Amount Account</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $result2 ?></h1>
                                        </div>
                                       <div id="sparkline-revenue3"></div>
                                    </div>
                                    <!-- <div id="sparkline-revenue3"></div> -->
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Avg. Amount in Accounts</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $result3 ?></h1>
                                        </div>
                                        <div id="sparkline-revenue4"></div>
                                    </div>
                                    
                                </div>
                            </div>
                                                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Loan Amount</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $result4 ?></h1>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Maxmim Loan</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $result5 ?></h1>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end new customer  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- visitor  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Minmin Loan</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $result6 ?></h1>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end visitor  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- total orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top border-top-primary">
                                    <div class="card-body">
                                        <h5 class="text-muted">Average Loan</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php echo $result7 ?></h1>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
<?php 
    $qry = "SELECT * FROM customer";
    $res = $cont->query($qry);
    $rest = "";
    if ($res->num_rows > 0)
    {
        $rest .= '<div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Accounts</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Account Number</th>
                                                        <th class="border-0">Name</th>
                                                        <th class="border-0">Father Name</th>
                                                        <th class="border-0">Cnic</th>
                                                        <th class="border-0">Phone</th>
                                                        <th class="border-0">Amount</th>
                                                        <th class="border-0">Email</th>
                                                    </tr>
                                                </thead>';
       while ($row= $res->fetch_assoc()) {
            $rest .=' <tbody>
                            <tr>
                                <td>'.$row["Account_number"].'</td>
                                <td>'.$row["Name"].'</td>
                                <td>'.$row["Fname"].'</td>
                                <td>'.$row["Cnic"].'</td>
                                <td>'.$row["Phnumber"].'</td>
                                <td>'.$row["Amdeposit"].'</td>
                                <td>'.$row["Email"].'</td>  
                            </tr> 
                            </tbody>';
        }
        $rest .=' </table>
                                        </div>
                                    </div>
                                </div>
                            </div>';
    }
    echo $rest;

 ?>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header"> Accounts </h5>
                                    <div class="card-body">
                                        <div class="ct-chart-category ct-golden-section" style="height: 315px;"></div>
                                        <div class="text-center m-t-40">
                                            <span class="legend-item mr-3">
                                                    <span class="fa-xs text-primary mr-1 legend-tile"><i class="fa fa-fw fa-square-full "></i></span><span class="legend-text">Current</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-secondary mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Default</span>
                                            </span>
                                            <span class="legend-item mr-3">
                                                <span class="fa-xs text-info mr-1 legend-tile"><i class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Saving </span>
                                            </span>
                                            <hr>
                                            <span >Accounts </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                       
                          
                                <!-- ============================================================== -->
                                <!-- end top perfomimg  -->
                         
                            <!-- ============================================================== -->
                            <!-- sales  -->
                            <!-- ============================================================== -->
   
                            <!-- ============================================================== -->
                            <!-- end total orders  -->
                            <!-- ============================================================== -->
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- total revenue  -->
                            <!-- ============================================================== -->
  
                            
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- category revenue  -->
                            <!-- ============================================================== -->

                      

            
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>