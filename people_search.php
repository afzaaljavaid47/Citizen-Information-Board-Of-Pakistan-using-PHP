<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Citizen Information Board of Pakistan</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="#"><span>Search Record</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to CIBOP</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header" style="border-bottom: 1px solid black">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
			<a class="navbar-brand" href="index.html" style="font-weight: bold;color: #0c118a">CIBOP</a>	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="index.php">Home</a></li>
                        <li><a class="nav-link active" href="people_search.php">People Search</a></li>
                        <li><a class="nav-link" href="criminal_search.php">Criminal Record</a></li>
						<li><a class="nav-link" href="court_record_search.php">Court Record</a></li>
                        <li><a class="nav-link" href="phone_book.php">Phone Book</a></li>
						<li><a class="nav-link" href="family_tree.php">Family Tree</a></li>
					   <li><a class="nav-link" href="faq.php">FAQ</a></li>				
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	
	<div class="container">
		<hr>
		<div class="row">
        <div class="col-md-3"></div>
			<div class="col-md-6">
			<form method="post" class="form-inline">
				<div class="form-group">
					<label>Enter Person Info : &nbsp;&nbsp; </label>
					<input type="text" name="tofind" class="form-control">
				</div>&nbsp;&nbsp;
				<input type="submit" name="search" class="btn btn-primary" value="Search">
				<p><span class="text-danger"><br>Important !&nbsp;&nbsp;</span>Info in the form of Name, Father Name, CNIC, Mobile Number or City</p>
			</form>
			</div>
			<div class="col-md-3"></div>			
			</div>
			<hr>
			<center>
				<?php
                    include("dbcon.php");
                    if(isset($_POST['search']))
                    {
                    	$search=$_POST['tofind'];
                    ?>
                    <h2>Result Against Person Info : <b><u><?php echo $search;?></u></b></h2>
			<table class="table table-responsive table-striped table-hover table-condensed">
				<thead>
				<tr class="table-primary">
					<td style="font-size: 19px;">Name</td>
					<td style="font-size: 19px;">Father Name</td>
					<td style="font-size: 19px;">CNIC</td>
					<td style="font-size: 19px;">Father CNIC</td>
					<td style="font-size: 19px;">Mobile No.</td>
					<td style="font-size: 19px;">Gender</td>
					<td style="font-size: 19px;">Age</td>
					<td style="font-size: 19px;">City</td>
					<td style="font-size: 19px;">Address</td>
					<td style="font-size: 19px;">Photo</td>
					<td style="font-size: 19px;">View</td>
				</tr>
				</thead>
				<tbody>
					<?php
                    $sql="SELECT * FROM `people_record` WHERE `person_cnic` LIKE '%$search%' || `name` LIKE '%$search%' || `age` LIKE '%$search%' || `city` LIKE '%$search%' || `mobile_number` LIKE '%$search%'";
                    $run=mysqli_query($con,$sql);
                     if(mysqli_num_rows($run)>0)
                    {
                   
                    while($data=mysqli_fetch_assoc($run))
                    {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $data['name'];?></td>
                            <td class="text-center"><?php echo $data['father_name'];?></td>
                            <td class="text-center"><?php echo $data['person_cnic'];?></td>
                            <td class="text-center"><?php echo $data['father_cnic'];?></td>
                            <td class="text-center"><?php echo $data['mobile_number'];?></td>
                            <td class="text-center"><?php echo $data['gender'];?></td>
                            <td class="text-center"><?php echo $data['age'];?></td>
                            <td class="text-center"><?php echo $data['city'];?></td>
                            <td class="text-center"><?php echo $data['permanent_address'];?></td>
                            <td class="text-center"><img src="admin/upload_images/<?php echo $data['photo'];?>" style="width: 100px;height: 100px;border-radius: 50px;"></td>
                            <td><a href="person_info.php?id=<?php  echo $data['person_cnic'];?>" class="btn btn-primary">View</a></td>
                        </tr>
                          <?php
                    }
                    }
                    else
                {
                	?>
                	<tr>
                		<td colspan="11">No Record Found</td>
                	</tr>
                	<?php

                }
                
                    ?>
 </tbody>
				</table>
				</div>
				</center>
				<div class="container" style="background-color: wheat;padding: 20px;border-radius: 5px;">
	<h1 class="text-primary text-center" style="font-size: 25px;letter-spacing: 2px;font-weight: bolder;">Give Us Your FeedBack</h1>
	<p class="text-center">Please Give us Feedback to improve the standard the our services</p>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
<form method="post">
	<div class="form-group">
		<label style="font-size: 19px;font-weight: bolder;">E-Mail</label>
		<input type="email" name="mail" class="form-control" required="">
	</div>
	<div class="form-group">
		<label style="font-size: 19px;font-weight: bolder;">FeedBack</label>
		<textarea name="feedback" class="form-control" required=""></textarea>
	</div>
	<input type="submit" name="feedback_submit" class="btn btn-primary" value="Send" style="font-size: 19px;font-weight: bolder;">
</form>
</div>
		<div class="col-md-3"></div>
	</div>
</div><br>
<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2019 <a href="#">Citizen INformation Board of Pakistan</a></p>
				</div>
			</div>
		</div>
	</footer>
<?php
}
?>	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>
<?php
if(isset($_POST['feedback_submit']))
{
	$mail=$_POST['mail'];
	$feed=$_POST['feedback'];
	$date=date('m-d-Y h-i-s A');
	$sql="INSERT INTO `feedback`(`email`, `feedback`,`feedback_date`) VALUES ('$mail','$feed','$date')";$run=mysqli_query($con,$sql);
    if($run)
    {
    	?>
    	<script type="text/javascript">
    		alert("FeedBack Sent Successfully");
    	</script>
    	<?php
    }
    else
    {
    	?>
    	<script type="text/javascript">
    		alert("Some errors try Agin!");
    	</script>
    	<?php
    }
                    
}

?>