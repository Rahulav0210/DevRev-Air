<?php

include "database.php";
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>DevRev Registeration Panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>DevRev Air - User Registeration</h1>
        </div>
        <div id="wrapper">
            <h3 id="heading">User Registeration</h3>
            <div id="centers">
                <?php
                if (isset($_POST["submit"])) {
                    // Get the form input values
                    $FID = $_POST["flightno"];
                    $DEP = $_POST["departure"];
                    $DES = $_POST["destination"];
                    $DATE = $_POST["date"];
                    $FILE = $_POST["fare"];

                    // Prepare and execute the SQL query
                    $sql = "INSERT INTO flight (FID, DEP, DES, DATE, FILE) VALUES ('$FID', '$DEP', '$DES', '$DATE', '$FILE')";
                    if ($db->query($sql) === TRUE) {
                        echo "Flight details added successfully!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }
                }
                ?>

                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <label>Flight No.</label>
                    <input type="text" name="flightno" required>
                    <label>Departure</label>
                    <input type="text" name="departure" required>
                    <label>Destination</label>
                    <input type="text" name="destination" required>
                    <label>Date</label>
                    <input type="text" name="date" required>
                    <label>Fare</label>
                    <input type="text" name="fare" required>
                    
                    <button type="submit" name="submit">Add Flight</button>
                </form>
            </div>
        </div>
        <div id="navi">
            <?php
            include "sidehome.php";
            ?>
        </div>
        <div id="footer">
            <p>&copy; <?php echo date("Y"); ?> Rahul AV</p>
        </div>
    </div>
</body>
</html>
