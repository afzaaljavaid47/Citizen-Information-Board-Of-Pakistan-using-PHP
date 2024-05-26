<?php
include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>LogIn Now</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    
</head>
<style type="text/css">
  #submit_btn:hover
  {
    cursor: pointer;
  }
</style>
<body style="padding-top: 30px;padding-bottom: 10px;background-color: wheat">
<div class="container-fluid">
<h1 class="text-center text-primary" style="padding-bottom: 20px;font-weight: bold;">Welcome to Citizen Information Board of Pakistan</h1>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<hr style="background-color: blue;height: 2px;">
<h2 style="text-align: center;font-weight: bold;" class="text-primary">Admin Log In</h2>
<hr style="background-color: blue;height: 2px;">
<form method="post">
  <div class="form-group">
    <label style="font-size: 19px;font-weight: bold;">User Name</label>
    <input type="text" name="uname" class="form-control" required="">
  </div>
  <div class="form-group">
    <label style="font-size: 19px;font-weight: bold;">Password</label>
    <input type="password" name="pass" class="form-control" required="">
  </div>
  <input type="submit" name="submit_login" style="font-size: 20px;" value="Log In" class="form-control btn btn-primary btn-lg" id="submit_btn">
</form>
<br>
<hr width="200px" style="float: left;"><span class="text-center">&nbsp;&nbsp;&nbsp;OR</span><hr width="180px" style="float: right;"/>
<br><br>

<button class="form-control btn btn-primary btn-lg" style="font-size: 20px;" id="submit_btn" data-toggle="modal" data-target="#mymodal">Register a New User
</button>

<p class="text-center text-danger" style="padding-top: 10px;">Only Admins with a Secret Password can Register a New User</p>
</div>
<div class="col-md-4"></div>
</div>

<div class="modal fade" id="mymodal">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
  <form method="post">
  <div class="modal-header bg-primary" style="font-size: 30px;color: white;font-weight: bold;">Register a New User
<span class="close" data-dismiss="modal">&times;</span>
  </div>
  <div class="modal-body">
  
    <div class="form-group">
    <label style="font-size: 18px;">User Name</label>
    <input type="text" name="uname" class="form-control" required="">
  </div>
  <div class="form-group">
    <label style="font-size: 18px;">Password</label>
    <input type="password" name="pass" class="form-control" required="">
  </div>
  <div class="form-group">
    <label style="font-size: 18px;">Your Secret Password</label>
    <input type="password" name="secret_pass" class="form-control" required="">
  </div>
  </div>
  <div class="modal-footer">
    <input type="submit" style="font-size: 20px;" name="submit_signup" id="submit_btn" value="Register" class="btn btn-primary btn-lg">
  </div>
  </form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit_signup']))
{
$un=$_POST['uname'];
$pas=$_POST['pass'];
$sec=$_POST['secret_pass'];
$sqll="SELECT * FROM `admins` WHERE `secret_passowrd`='$sec'";
$runn=mysqli_query($con,$sqll);
$row=mysqli_fetch_row($runn);
if($row>=1)
{
$sql="INSERT INTO `admins`(`user_name`, `password`) VALUES ('$un','$pas')";
$run=mysqli_query($con,$sql);
if($run==true)
  {
      ?>
      <script type="text/javascript">
        alert("User Added Successfully !");
      </script>

      <?php
  }
else
  {
      ?>
      <script type="text/javascript">
        alert("Some Errors Please Try Again!");
      </script>

      <?php
  }
}
else
  {
      ?>
      <script type="text/javascript">
        alert("Secret Password is Not Correct !");
      </script>

      <?php
  }
}
?>


<?php
if(isset($_POST['submit_login']))
{
  $un=$_POST['uname'];
  $pa=$_POST['pass'];
  $sql="SELECT * FROM `admins` WHERE `user_name`='$un' and `password`='$pa'";
  $run=mysqli_query($con,$sql);
  $data=mysqli_fetch_assoc($run);
  if($data>0)
  {
    setcookie("login","1");
    setcookie("un",$data['id']);
      ?>
      <script type="text/javascript">
        alert("Log In Successfully !");
        window.location.href="dashboard.php";
      </script>

      <?php
  }
  else
  {
      ?>
    <script type="text/javascript">
      alert("User Name or Password is incorrect!");
    </script>
    <?php
  }
  }
?>
