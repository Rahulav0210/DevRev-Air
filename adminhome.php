<?php
session_start();
include "database.php";

function countRecord($sql,$db)
{
	$res=$db->query($sql);
	return $res->num_rows;
}

if(!isset($_SESSION["AID"]))
{
	header("location:adminpanel.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>DevRev Air Login</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div id="container">
		<div id="header">
		<h1>DevRev Air Admin Panel</h1>
		</div>
		<div id="wrapper">
			<h3 id="heading">Admin Home</h3>
			<div id=centers">
				<ul class="record" >
					<li>Total Users       : <?php echo countRecord("select * from userreg",$db); ?></li>
					<li>Total Flights     : <?php echo countRecord("select * from flight",$db); ?></li>
					<li>Total Reviews     : <?php echo countRecord("select * from review",$db); ?></li>
					<li>Total Suggestions : <?php echo countRecord("select * from suggestions",$db); ?></li>
				</ul>
			</div>
	</div> 
	<div id="navi">
		<?php
			include "adminsidebar.php";
			?>
	</div>
	<div id="footer">
	<p>Copyright &copy; Rahul AV 2023<p>
	</div>
	</div>
	</body>

</html>