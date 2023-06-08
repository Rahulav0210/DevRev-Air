<?php
session_start();
include "database.php";


?>

<!DOCTYPE HTML>
<html>
<head>
    <title>DevRev Review Panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>DevRev Air - Review Flight</h1>
        </div>
        <div id="wrapper">
            <h3 id="heading">Add Review to a Flight</h3>
            <div id="centers">
                <?php
                if (isset($_POST["submit"])) {
                    // Get the form input values
                    $FID = $_POST["flightno"];
                    $SID = $_POST["departure"];
                    $LOGS = $_POST["destination"];
                    $COMM = $_POST["date"];

                    // Prepare and execute the SQL query
                    $sql = "INSERT INTO review (FID, SID, LOGS, COMM) VALUES ('$FID', '$SID', '$LOGS', '$COMM')";
                    if ($db->query($sql) === TRUE) {
                        echo "Review added successfully!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }
                }
                ?>

                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <label>Flight NO.</label>
                    <input type="text" name="flightno" required>
                    <label>User ID</label>
                    <input type="text" name="departure" required>
                    <label>Date & Time (ex: 2023-06-16 17:02:24)</label>
                    <input type="text" name="destination" required>
                    <label>Comments</label>
                    <input type="text" name="date" required>
                    
                    <button type="submit" name="submit">Add Review</button>
                </form>
            </div>
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
