<?php
$con=mysqli_connect("localhost","root","","cibop");
if(!$con)
{
	?>
	<script type="text/javascript">
		alert("DataBase Connectivity Error !");
	</script>
	<?php
}
?>