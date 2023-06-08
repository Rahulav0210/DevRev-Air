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
		<title>View DevRev Passengers</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div id="container">
		<div id="header">
		<h1>DevRev Air Admin Panel</h1>
		</div>
		<div id="wrapper">
			<h3 id="heading">View User Details</h3>
			<?php
				$sql="SELECT * FROM userreg";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					echo "<table>
						<tr>
							<th>SNO</th>
							<th>NAME</th>
							<th>MAIL</th>
							<th>PHNO</th>
			
				</tr>
						";
				$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["NAME"]}</td>";
					echo "<td>{$row["MAIL"]}</td>";
					echo "<td>{$row["PHNO"]}</td>";
					echo "</tr>";
				}
					echo "</table>";
					}
				else
				{
					echo "<p class='error'>No Passengers Found</p>";
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