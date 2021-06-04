
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>
<style>

input[type=text] {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 3px;
  margin-bottom: 5px;
  margin-left:25%;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:25%;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  background-color: #f2f2f2;
}
</style>
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
                <a class="navbar-brand" href="admin.php">XYZ Hospital Emergence</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        

                      
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Ahsan Chughtai </h5>
                                    <span class="status"></span><span class="ml-2">Administrator</span>
                                </div>
                                <a class="dropdown-item" href="../../Front-page/index.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
                                <a class="nav-link active" href="../Emergence.html" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    
                           
                     <li class="nav-item">
                                <a class="nav-link" href="Track.html"data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-diagnoses"></i>Track Patient</a>
                            </li>         
                           
                             <li class="nav-item">
                                <a class="nav-link" href="OT.html"data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-diagnoses"></i>OT Allocation </a>
                            </li>  
                         <li class="nav-item">
                                <a class="nav-link" href="ICU_Bed.html"data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-diagnoses"></i>ICU Bed Allocation</a>
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
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                   <br><br><br>               
                   <h1 >Patient On Way</h1>
                                <div class="card">
                                    
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                      <th class="border-0">Patient Name </th>
                                                        <th class="border-0">Age</th>
                                                        <th class="border-0">CINC</th>
                                                        <th class="border-0">Sex</th>
                                                        <th class="border-0">location</th>
                                                        <th class="border-0">Disease</th>  
                                                        <th class="border-0">Condition</th>
                                                          
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <td>Muhammad Ahsan Ali</td>
                                                    <td>15</td>
                                                    <td>12101-8433451-7</td>
                                                    <td>Male</td>
                                                    <td>Awais Hostel,Peshawar</td>
                                                    <td>Burn</td>
                                                    <td>minor problem</td>
                                                    </tr> 
                                                </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                                <h3 style="text-align:center;">Complete Patient History</h3>
                                <form action="#" method="Post">
                                  <input type="text" id="fname" name="CnicNo" placeholder= "Patient Cnic No">
                                <br>
                                  <input type="submit" value="History" name="History">
                  </form>

                  <br><br><br>
                  <hr> 
                            <br>
                  <div >
                  <h2>Patient Condition Summary:</h2>
                  <p style="font-size:20px;" >Patient has Hands Burn  And Cause of the Burn is Electric shock</p> 
                  <h2>Need of Patient:</h2>
                  <ul style="font-size:20px;">
                    <li>Availabilty of Dotor</li>
                    <li>ICU Bed</li>
                    <li>Managnment of Burn Pain</li>
                  </ul>
                  <h2>Medicine Prescribe:</h2>
                  <UL style="font-size:20px;">
                   <li>IV Burn Fluid</li>
                  </UL>
                  </div>
          </div>  
          </div>
                <br><br>


                
        
      

    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
</body>
 
</html>