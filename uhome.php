<?php
session_start();
include "database.php";

if(!isset($_SESSION["ID"]))
{
	header("location:userlogin.php");
}
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
        <h1>DevRev Air Admin Panel</h1>
    </div>
    <div id="wrapper">
        <h3 id="heading">Welcome <?php echo $_SESSION["NAME"];?></h3>
        <p>Introducing DevRev Airlines - Your Premier Travel Partner

Are you ready to embark on a journey like no other? Look no further than DevRev Airlines, your premier travel partner offering exceptional services and unforgettable experiences. With a commitment to excellence, we bring you a seamless travel experience that will exceed your expectations at every step.

Why choose DevRev Airlines? Here's what sets us apart:

Unparalleled Comfort: Sit back, relax, and indulge in the utmost comfort as you soar through the skies. Our state-of-the-art aircraft are designed with your comfort in mind, featuring spacious seating, adjustable headrests, and ample legroom. Experience a journey where relaxation begins the moment you step on board.

Impeccable Service: Our dedicated team of highly-trained professionals is committed to providing you with unparalleled service. From the moment you book your ticket until you reach your destination, our attentive staff will ensure your every need is met. Sit back and enjoy our warm hospitality as we take care of every detail.

Extensive Destination Network: With DevRev Airlines, the world is at your fingertips. Our extensive network of destinations covers major cities across the globe, allowing you to explore new horizons and create cherished memories. Whether it's a business trip or a dream vacation, we connect you to your desired destination with ease. Cutting-Edge Technology: Embracing innovation, we bring you the latest advancements in air travel technology. Our modern fleet is equipped with advanced navigation systems, ensuring a smooth and safe journey. Stay connected with our in-flight Wi-Fi and entertainment systems, keeping you entertained and connected throughout your flight.

Competitive Fares: At DevRev Airlines, we believe that exceptional service shouldn't come with a hefty price tag. We offer competitive fares that provide unbeatable value for your travel investment. Explore the world without breaking the bank, making your travel dreams a reality.

Experience the joy of flying with DevRev Airlines, where every journey is an extraordinary adventure. Book your tickets now and let us redefine your travel experience. Trust us to take you to new heights, delivering the excellence and reliability you deserve.

DevRev Airlines - Your Premier Travel Partner. Let us take you on a journey of a lifetime.Cutting-Edge Technology: Embracing innovation, we bring you the latest advancements in air travel technology. Our modern fleet is equipped with advanced navigation systems, ensuring a smooth and safe journey. Stay connected with our in-flight Wi-Fi and entertainment systems, keeping you entertained and connected throughout your flight.

Competitive Fares: At DevRev Airlines, we believe that exceptional service shouldn't come with a hefty price tag. We offer competitive fares that provide unbeatable value for your travel investment. Explore the world without breaking the bank, making your travel dreams a reality.

Experience the joy of flying with DevRev Airlines, where every journey is an extraordinary adventure. Book your tickets now and let us redefine your travel experience. Trust us to take you to new heights, delivering the excellence and reliability you deserve.

DevRev Airlines - Your Premier Travel Partner. Let us take you on a journey of a lifetime.Cutting-Edge Technology: Embracing innovation, we bring you the latest advancements in air travel technology. Our modern fleet is equipped with advanced navigation systems, ensuring a smooth and safe journey. Stay connected with our in-flight Wi-Fi and entertainment systems, keeping you entertained and connected throughout your flight.

Competitive Fares: At DevRev Airlines, we believe that exceptional service shouldn't come with a hefty price tag. We offer competitive fares that provide unbeatable value for your travel investment. Explore the world without breaking the bank, making your travel dreams a reality.

Experience the joy of flying with DevRev Airlines, where every journey is an extraordinary adventure. Book your tickets now and let us redefine your travel experience. Trust us to take you to new heights, delivering the excellence and reliability you deserve.

DevRev Airlines - Your Premier Travel Partner. Let us take you on a journey of a lifetime.</p>
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
