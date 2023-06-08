<?php
session_start();
include "database.php";

if(!isset($_SESSION["AID"]))
{
	header("location:adminpanel.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>DevRev Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div id="container">
		<div id="header">
		<h1>DevRev Air View Flights</h1>
		</div>
		<div id="wrapper">
			<h3 id="heading">Review Details</h3>
			<?php
				$sql="SELECT * FROM review";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					echo "<table>
						<tr>
							<th>SNO</th>
							<th>Fligt ID</th>
							<th>Customer ID</th>
							<th>Logs</th>
							<th>Review</th>
							
				</tr>
						";
				$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["FID"]}</td>";
					echo "<td>{$row["SID"]}</td>";
					echo "<td>{$row["LOGS"]}</td>";
					echo "<td>{$row["COMM"]}</td>";
					echo "</tr>";
				}
					echo "</table>";
					}
				else
				{
					echo "<p class='error'>No Flights Found</p>";
				}
			
			?>
			
			
			
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