<?php
if(!isset($_COOKIE['login']))
{
    header("location:login.php");
}
else
{
session_start();
$un_id=$_COOKIE["un"];
include("dbcon.php");
$sql="SELECT * FROM `admins` WHERE `id`='$un_id'";
$run=mysqli_query($con,$sql);
$dataa=mysqli_fetch_array($run);
$id=$_GET['id'];
$sql1="SELECT * FROM `court_record` WHERE `p_cnic`='$id'";
$run1=mysqli_query($con,$sql1);
$data=mysqli_fetch_assoc($run1);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Admin Dashboard 
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicons.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.1" rel="stylesheet" />
</head>
<style type="text/css">
  #button_hover:hover
  {
    background-color: #3a7ff0;

  }
</style>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./dashboard.php">
      <span class="text-blue" style="font-weight:bold;font-size: 25px;">CIBOP!</span>
      </a>
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./dashboard.php">
                <span class="text-blue" style="font-weight:bold;font-size: 25px;">CIBOP!</span>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>       
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="" data-toggle="dropdown">
              <i class="ni ni-single-02 text-blue"></i>People Record&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu">
              <a href="add_people_record.php" class="dropdown-item"><i class="fas fa-plus"></i>Add Record</a>
              <a href="delete_people_record.php" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete Record</a>
              <a href="update_people_record.php" class="dropdown-item"><i class="fas fa-edit"></i>Update Record</a>
              <a href="search_people_record.php" class="dropdown-item"><i class="fas fa-search"></i>Search Record</a>
              <a href="show_all_people_record.php" class="dropdown-item"><i class="fas fa-globe-asia"></i>Show all Record</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="add_people_record.php" data-toggle="dropdown">
              <i class="ni ni-badge text-blue"></i>Criminal Record&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu">
              <a href="add_criminal_record.php" class="dropdown-item"><i class="fas fa-plus"></i>Add Record</a>
              <a href="delete_criminal_record.php" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete Record</a>
              <a href="update_criminal_record.php" class="dropdown-item"><i class="fas fa-edit"></i>Update Record</a>
              <a href="search_criminal_record.php" class="dropdown-item"><i class="fas fa-search"></i>Search Record</a>
              <a href="show_all_criminal_record.php" class="dropdown-item"><i class="fas fa-globe-asia"></i>Show all Record</a>
            </div>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link active" href="add_people_record.php" data-toggle="dropdown">
              <i class="ni ni-single-copy-04 text-red"></i>Court Record&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
            </a>
           <div class="dropdown-menu">
              <a href="add_court_record.php" class="dropdown-item"><i class="fas fa-plus"></i>Add Record</a>
              <a href="delete_court_record.php" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete Record</a>
              <a href="update_court_record.php" class="dropdown-item"><i class="fas fa-edit"></i>Update Record</a>
              <a href="serach_court_record.php" class="dropdown-item"><i class="fas fa-search"></i>Search Record</a>
              <a href="show_court_record.php" class="dropdown-item"><i class="fas fa-globe-asia"></i>Show all Record</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="add_people_record.php" data-toggle="dropdown">
              <i class="ni ni-tablet-button text-orange"></i>Phone Book&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu">
              <a href="phone_book.php" class="dropdown-item"><i class="fas fa-plus"></i>Add Record</a>
              <a href="delete_phone_book.php" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete Record</a>
              <a href="update_book.php" class="dropdown-item"><i class="fas fa-edit"></i>Update Record</a>
              <a href="search_phone_book.php" class="dropdown-item"><i class="fas fa-search"></i>Search Record</a>
              <a href="show_phone_book.php" class="dropdown-item"><i class="fas fa-globe-asia"></i>Show all Record</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="add_people_record.php" data-toggle="dropdown">
              <i><i class="fas fa-tree text-yellow"></i></i>Family Tree&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu">
              <a href="family_tree.php" class="dropdown-item"><i class="fas fa-plus"></i>Add Record</a>
              <a href="delete_family_tree.php" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete Record</a>
              <a href="update_family_tree.php" class="dropdown-item"><i class="fas fa-edit"></i>Update Record</a>
              <a href="search_family_tree.php" class="dropdown-item"><i class="fas fa-search"></i>Search Record</a>
              <a href="show_family_trees.php" class="dropdown-item"><i class="fas fa-globe-asia"></i>Show all Record</a>
            </div>
          </li>
          </ul>
        <hr class="my-3">
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="total_subscribers.php">
              <i class="ni ni-spaceship"></i>Total Subscribes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="messages.php">
              <i class="fas fa-envelope-square"></i> Messages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user_feedbacks.php">
              <i class="fas fa-comment-dots"></i> User feedBacks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="my_profile.php">
              <i class="ni ni-ui-04"></i> My Profile
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="add_new_admin.php">
              <i class="ni ni-single-02"></i> Add New Admin
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="fas fa-sign-out-alt"></i>Log Out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./dashboard.php">Dashboard</a>
       
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">  <img src="./assets/img/admin-avatar.png" width="45px" />
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">
                    <?php echo $dataa['user_name'];?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="my_profile.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
             <div class="dropdown-divider"></div>
              <a href="index.php" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
      


         <script type="text/javascript">
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
  <div class="container" id="printableArea" style="">
    <hr>
    <h3 style="color: white;">Info About Reference ID : <b><u style="letter-spacing: 2px;"><?php echo $id;?></u></b></h3>
    <hr>
<center style="background-color: white;">
  <div id="content">
<table border="2" class="table-responsive table-striped">
  <tr>
    <td style="padding: 50px;">
      <table>

        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Case No. </b></span></td>
          <td><?php echo $data['case_no'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Name </b></span></td>
          <td><?php echo $data['name'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Father Name </b></span></td>
          <td><?php echo $data['father_name'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Person CNIC </b></span></td>
          <td><?php echo $data['p_cnic'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Mobile Number </b></span></td>
          <td><?php echo $data['pmobile'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Gender  </b></span></td>
          <td><?php echo $data['p_gender'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Address </b></span></td>
          <td><?php echo $data['p_address'];?></td>
        </tr>
         <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Opp. Name </b></span></td>
          <td><?php echo $data['opp_name'];?></td>
        </tr>

        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Opp. CNIC </b></span></td>
          <td><?php echo $data['opp_cnic'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Opp. Mobile Number </b></span></td>
          <td><?php echo $data['omobile'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Opp. Gender  </b></span></td>
          <td><?php echo $data['opp_gender'];?></td>
        </tr>
        <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Opp. Address </b></span></td>
          <td><?php echo $data['opp_address'];?></td>
        </tr>
         <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Court Address </b></span></td>
          <td><?php echo $data['court_address'];?></td>
        </tr>
 <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Lawyer </b></span></td>
          <td><?php echo $data['lawyer'];?></td>
        </tr>
 <tr>
          <td colspan="1.5" style="padding: 10px;"><span style="font-size: 18px;">  <b>Alligation </b></span></td>
          <td><?php echo $data['alligation'];?></td>
        </tr>



      </table>      
  </tr>
  </div>
<div id="editor"></div>

  <tr style="padding-left: 20px;">
    <td colspan="2">
    <button style="letter-spacing: 2px;" id="button_hover" class="btn btn-danger btn-block" onclick="printDiv('printableArea')">PRINT</button> 
    </td>
    
  </tr>
</table>
</center>
        </div>
      </div>
    </div>

  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.min.js?v=1.1.1"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>