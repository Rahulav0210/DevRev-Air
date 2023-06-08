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
                    // Prepare and execute the SQL query
                    $NAME = $_POST["name"];
                    $PASS = $_POST["pass"];
                    $MAIL = $_POST["mail"];
                    $PHNO = $_POST["phno"];

                    $sql = "INSERT INTO userreg (NAME, PASS, MAIL, PHNO) VALUES ('$NAME', '$PASS', '$MAIL', '$PHNO')";
                     if ($db->query($sql) === TRUE) {
                        echo "User Registeration successfully!";
                    } else {
                        echo "Error: " . $sql . "<br>" . $db->error;
                    }
                }
                ?>

                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <label>Name</label>
                    <input type="text" name="name" required>
                    <label>PASS</label>
                    <input type="text" name="pass" required>
                    <label>MAIL</label>
                    <input type="text" name="mail" required>
                    <label>PHNO</label>
                    <input type="text" name="phno" required>
                    
                    <button type="submit" name="submit">Submit</button>
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
