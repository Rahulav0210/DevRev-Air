<?php
session_start();
include "database.php";
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
		<h1>DevRev Air Login Panel</h1>
		</div>
		<div id="wrapper">
			<h3 id="heading">Admin Login Here</h3>
			<div id=centers">
			<?php
				if(isset($_POST["submit"]))
				{
					$sql="SELECT * FROM admin where ANAME='{$_POST["adminname"]}' and APASS='{$_POST["adminpass"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$row=$res->fetch_assoc();
						$_SESSION["AID"]=$row["AID"];
						$_SESSION["ANAME"]=$row["ANAME"];
						header("location:adminhome.php");
					}
					else
					{
						echo "<p class='error'>Invalid User Details</p>";
					}	
				}
			?>
			
			<form action="adminpanel.php" method="post" >
			<label>Name</label>
			<input type="text" name="adminname" required>
			<label>Password</label>
			<input type="text" name="adminpass" required>
			<button type="submit" name="submit" >Login Now</button>
			</form>
			</div>
	</div>
	<div id="navi">
		<?php
			include "sidehome.php";
			?>
	</div>
	<div id="footer">
	<p>Copyright &copy; Rahul AV 2023<p>
	</div>
	</div>
	</body>

</html>