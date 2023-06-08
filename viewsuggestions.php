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
		<h1>DevRev Air View Suggestions</h1>
		</div>
		<div id="wrapper">
			<h3 id="heading">Suggestions Details</h3>
			<?php
				$sql="SELECT * FROM suggestions";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					echo "<table>
						<tr>
							<th>SNO</th>
							<th>User ID</th>
							<th>Suggestion</th>
							<th>Logs</th>
							
							
				</tr>
						";
				$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["ID"]}</td>";
					echo "<td>{$row["MES"]}</td>";
					echo "<td>{$row["LOGS"]}</td>";
					
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