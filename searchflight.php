<?php
session_start();
include "database.php";


?>

<!DOCTYPE HTML>
<html>
<head>
    <title>DevRev Search</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>DevRev Air - Search Flight</h1>
        </div>
        <div id="wrapper">
            <h3 id="heading">Search for a Flight</h3>
            <div id="centers">
               

                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <label>Enter Departure or destination</label>
                    <textarea required name="name"></textarea>
                   
                    <button type="submit" name="submit">Search Now</button>
                </form>
            </div>
			
			<?php
			 if(isset($_POST["submit"])) 
				{
				$sql="SELECT * FROM flight where DEP ='{$_POST["name"]}' or DES = '{$_POST["name"]}'";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					echo "<table>
						<tr>
							<th>SNO</th>
							<th>DEPARTURE</th>
							<th>DESTINATION</th>
							<th>DATE</th>
							<th>FARE</th>
			
				</tr>
						";
				$i=0;
				while($row=$res->fetch_assoc())
				{
					$i++;
					echo "<tr>";
					echo "<td>{$i}</td>";
					echo "<td>{$row["DEP"]}</td>";
					echo "<td>{$row["DES"]}</td>";
					echo "<td>{$row["DATE"]}</td>";
					echo "<td>{$row["FILE"]}</td>";
					echo "</tr>";
				}
					echo "</table>";
					}
				else
				{
					echo "<p class='error'>No Flights Found</p>";
				}
				}
			?>
			
        </div>
        <div id="navi">
            <?php
            include "usersidebar.php";
            ?>
        </div>
        <div id="footer">
            <p>&copy; <?php echo date("Y"); ?> Rahul AV</p>
        </div>
    </div>
</body>
</html>
