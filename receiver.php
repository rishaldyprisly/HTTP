<?php

    // Prepare variables for database connection
   
    $dbusername = "YourUsername";  // enter database username, I used "arduino" in step 2.2
    $dbpassword = "Your Pass";  // enter database password, I used "arduinotest" in step 2.2
    $server = "Your Server"; // IMPORTANT: if you are using XAMPP enter "localhost", but if you have an online website enter its address, ie."www.yourwebsite.com"

    // Connect to your database

    $dbconnect = mysql_connect($server, $dbusername, $dbpassword);
    $dbselect = mysql_select_db("DB Name",$dbconnect);
    $temperature                = $_REQUEST["temperature"];
    $humidity                   = $_REQUEST["humidity"];
    $location       		    = $_REQUEST["location"];

    // Prepare the SQL statement

    $sql = "INSERT INTO status (temperature, humidity, location) VALUES ('$temperature', '$humidity', '$location')"; 

    //$sql = "INSERT INTO status (temperature) VALUES ('".$_GET["temperature"]."')"; 
    //$sql2 = "INSERT INTO status (humidity) VALUES ('".$_GET["humidity"]."')"; 
    //$sql3 = "INSERT INTO status (location) VALUES ('".$_GET["location"]."')"; 
    // Execute SQL statement

    mysql_query($sql);
    //mysql_query($sql2);
    //mysql_query($sql3);

?>
