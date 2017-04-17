<?php
/**
 * Created by PhpStorm.
 * User: elijahmolloy
 * Date: 4/2/17
 * Time: 1:13 PM
 */

// Initialize Admin login information.
$servername = "squarelist.org:3306";
$username = "square_admin";
$password = "square_admin";
$dbname = "squarelist_new_updated";
$connected = false;


// Step 1
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    // load "No internet access" login page.
}

else {
    // load normal login page.
}



if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}




?>