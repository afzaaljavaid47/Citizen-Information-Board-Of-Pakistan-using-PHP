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
$data=mysqli_fetch_array($run);
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
  <link href="./assets/img/brand/favicons.png" rel="icon" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <link href="./assets/css/argon-dashboard.css?v=1.1.1" rel="stylesheet" />
  <link rel="stylesheet" href="plugins/file-uploader/css/jquery.fileupload.css">
  <link rel="stylesheet" href="admin/plugins/file-uploader/css/jquery.fileupload-ui.css">
  <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
 <script>
    function PreviewImage(upname, prv_id) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementsByName(upname)[0].files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById(prv_id).src = oFREvent.target.result;
        };
    };  
</script>
</head>
<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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
          <li class="nav-item dropdown active">
            <a class="nav-link active" href="" data-toggle="dropdown">
              <i class="ni ni-single-02 text-blue"></i>People Record&nbsp;&nbsp;<i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu">
              <a href="add_people_record.php" class="dropdown-item"><i class="fas fa-plus"></i>Add Record</a>
              <a href="delete_people_record.php" class="dropdown-item"><i class="fas fa-trash-alt"></i>Delete Record</a>
              <a href="update_people_record.php" class="dropdown-item active"><i class="fas fa-edit"></i>Update Record</a>
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
          <li class="nav-item dropdown">
            <a class="nav-link" href="add_people_record.php" data-toggle="dropdown">
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
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./dashboard.php">Dashboard</a>
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">  <img src="./assets/img/admin-avatar.png" width="45px" />
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">
                    <?php echo $data['user_name'];?></span>
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
          <div style="background-color: #779eed;padding-top: 15px;padding-bottom: 50px;border-radius: 20px;color: white;">
            <h1 style="text-align: center;font-weight: bold;padding: 20px;color: white;">People Record Details</h1>

          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" required="" placeholder="Ali....">
                </div>
                <div class="form-group">
                  <label>Father CNIC (Without Dashes)</label>
                  <input type="text" name="fcnic" class="form-control" required="" placeholder="3460272108214">
                </div>
                <div class="form-group">
                  <label>Gender</label><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;<label for="male">Male&nbsp;&nbsp;</label><input id="male" type="radio" name="gender" value="Male">&nbsp;&nbsp;&nbsp;&nbsp;
                  <label for="female">Female</label>&nbsp;&nbsp;&nbsp;<input id="female" type="radio" name="gender" value="Female">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="number" value="18" name="age" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input type="text" name="city" class="form-control" required="" placeholder="Sialkot.....">
                </div>                                           
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>Father Name</label>
                  <input type="text" name="fname" class="form-control" required="" placeholder="Father Name Here.....">
                </div>
                <div class="form-group">
                  <label> Person Mobile No.</label>
                  <input type="text" name="mobile" class="form-control" required="" placeholder="03497462877 (Without Dashes)">
                </div>
                <div class="form-group">
                  <label>Temporary Address</label>
                  <input type="text" name="taddress" class="form-control" required="" placeholder="Temporary address Here.....">
                </div>               
               <div class="form-group">
                  <label>Browse Photo</label>
                  <input type="file" accept="image/*" name="img" id="spic" onchange="PreviewImage('img', 'logo_preview')" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label>Photo</label>
                  <img src="images/fm.png" id="logo_preview" style="width: 200px;height: 150px;">
                </div>
                </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label>CNIC (Without Dashes)</label>
                  <input type="text" name="cnic" class="form-control" required="" placeholder="34602988503051">
                </div>
                <div class="form-group">
                  <label>Person E-Mail</label>
                  <input type="email" name="email" class="form-control" required="" placeholder="afzaaljavaid47@gmail.com">
                </div>
                <div class="form-group">
                  <label>Permanenet Address</label>
                  <input type="text" name="paddress" class="form-control" required="" placeholder="Permanenet address Here.....">
                </div>
                <div class="form-group">
                  <label>Identity Mark</label>
                  <input type="text" name="im" class="form-control" placeholder="Cut Mark on nose.....">
                </div>
                <div class="form-group">
                  <label>Extra Remarks</label>
                  <textarea name="er" class="form-group"></textarea>
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
              <div class="col-md-3">  
                <input type="submit" class="btn btn-lg btn-block btn-primary" name="submit" value="Submit Record" style="font-size: 18px;">                             
              </div>            
            <div class="col-md-2"></div>
            </div>
          </form>
         </div>
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

<?php
include("dbcon.php");
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $cnic=$_POST['cnic'];
  $fcnic=$_POST['fcnic'];
  $gender=$_POST['gender'];
  $fname=$_POST['fname'];
  $age=$_POST['age'];
  $taddress=$_POST['taddress'];
  $paddress=$_POST['paddress'];
  $email=$_POST['email'];
  $city=$_POST['city'];
  $im=$_POST['im'];
  $er=$_POST['er'];
  $mobile=$_POST['mobile'];
  $sql_fetch_cnic="SELECT * FROM `people_record` WHERE `person_cnic`='$cnic'";
  $run=mysqli_query($con,$sql_fetch_cnic);
  if(mysqli_num_rows($run)>0)
  {
    ?>
   <script type="text/javascript">
      alert("Person CNIC Number Already Exist !");
    </script>
   <?php
  }
  else if($cnic==$fcnic)
  {
   ?>
   <script type="text/javascript">
      alert("Person CNIC and Father CNIC are Same !");
    </script>
   <?php 
  }
  else
  {  
  $imagename=$_FILES['img']['name'];
  $tempname=$_FILES['img']['tmp_name'];
  move_uploaded_file($tempname,"upload_images/$imagename");
  $sql="INSERT INTO `people_record`(`name`, `father_name`, `person_cnic`,`father_cnic`, `mobile_number`, `gender`, `age`, `email`, `city`, `temporary_address`, `permanent_address`, `photo`, `identity_mark`, `extra_remarks`) VALUES ('$name','$fname','$cnic','$fcnic','$mobile','$gender','$age','$email','$city','$taddress','$paddress','$imagename','$im','$er')";
  $run=mysqli_query($con,$sql);
  if($run)
  {
    ?>
    <script type="text/javascript">
      alert("Certificate Added Successfully !");
    </script>
    <?php
  }
  else
  {
    ?>
    <script type="text/javascript">
      alert("Some Errors Try Agian ! ");
    </script>
    <?php   
  }
}
}
?>

