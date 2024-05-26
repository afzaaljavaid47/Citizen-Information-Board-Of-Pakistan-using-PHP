<?php
include("dbcon.php");
$id=$_GET['id'];
$sql="SELECT * FROM `people_record` WHERE `person_cnic`='$id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
                    
?>
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
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
	<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
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
	<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
	<div class="container" id="printableArea">
		<br>
		<h3>Info About Reference ID : <b><u><?php echo $id;?></u></b></h3>
		<hr>
<center>
	<div id="content">
<table border="2" class="table-striped table-hover">
	<tr>
		<td style="padding: 50px;">
			<table>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Name </b></span></td>
					<td><?php echo $data['name'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Father Name </b></span></td>
					<td><?php echo $data['father_name'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Person CNIC </b></span></td>
					<td><?php echo $data['person_cnic'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Father CNIC </b></span></td>
					<td><?php echo $data['father_cnic'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Mobile Number </b></span></td>
					<td><?php echo $data['mobile_number'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Gender  </b></span></td>
					<td><?php echo $data['gender'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Age  </b></span></td>
					<td><?php echo $data['age'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>City  </b></span></td>
					<td><?php echo $data['city'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>E-Mail  </b></span></td>
					<td><?php echo $data['email'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Permanenet Address  </b></span></td>
					<td><?php echo $data['permanent_address'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Temporary Address </b></span></td>
					<td><?php echo $data['temporary_address'];?></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><span style="font-size: 18px;">	<b>Identity Mark  </b></span></td>
					<td><?php echo $data['identity_mark'];?></td>
				</tr>
				
			</table>			
		<td>
		<img src="admin/upload_images/<?php echo $data['photo'];?>" style="width: 300px;height: 300px;"><br>
		</td>
	</tr>
	</div>
<div id="editor"></div>

	<tr style="padding-left: 20px;">
		<td colspan="2">
		<button style="letter-spacing: 2px;" class="btn btn-primary btn-block" onclick="printDiv('printableArea')">Print</button>	
		</td>
		
	</tr>
</table>
</center>
	
<br>
<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2019 <a href="#">Citizen INformation Board of Pakistan</a></p>
				</div>
			</div>
		</div>
	</footer>
	
	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
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