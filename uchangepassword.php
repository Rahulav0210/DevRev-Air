<?php
session_start();
include "database.php";

if (!isset($_SESSION["ID"])) {
    header("location: userlogin.php");
    exit();
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>DevRev User Panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>DevRev Air Authentication</h1>
        </div>
        <div id="wrapper">
            <h3 id="heading">Change Password</h3>
            <div id="centers">
                <?php
                if (isset($_POST["submit"])) {
                    $opass = $_POST["opass"];
                    $npass = $_POST["npass"];
                    $id = $_SESSION["ID"];

                    $sql = "SELECT * FROM userreg WHERE PASS='$opass' AND ID='$id'";
                    $res = $db->query($sql);

                    if ($res->num_rows > 0) {
                        $s = "UPDATE userreg SET PASS='$npass' WHERE ID='$id'";
                        $db->query($s);
                        echo "<p class='success'>Password Changed</p>";
                    } else {
                        echo "<p class='error'>Invalid Password</p>";
                    }
                }
                ?>

                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <label>Old password</label>
                    <input type="password" name="opass" required>
                    <label>New password</label>
                    <input type="password" name="npass" required>
                    <button type="submit" name="submit">Update Password</button>
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
