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
            <h1>DevRev Air User Panel</h1>
        </div>
        <div id="wrapper">
            <h3 id="heading">User Login</h3>
            <div id="centers">
                <?php
                if (isset($_POST["submit"])) {
                    $name = $_POST["NAME"];
                    $pass = $_POST["PASS"];

                    $sql = "SELECT * FROM userreg WHERE NAME='$name' AND PASS='$pass'";
                    $res = $db->query($sql);

                    if ($res->num_rows > 0) {
                        $row = $res->fetch_assoc();
                        $_SESSION["ID"] = $row["ID"];
                        $_SESSION["NAME"] = $row["NAME"];
                        header("location: uhome.php");
                        exit();
                    } else {
                        echo "<p class='error'>Invalid User Details</p>";
                    }
                }
                ?>

                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <label>Name</label>
                    <input type="text" name="NAME" required>
                    <label>Password</label>
                    <input type="password" name="PASS" required>
                    <button type="submit" name="submit">Login Now</button>
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
