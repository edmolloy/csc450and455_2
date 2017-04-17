<?php
/**
 * Created by PhpStorm.
 * User: elijahmolloy
 * Date: 4/5/17
 * Time: 8:17 PM
 */

//
$hostname =     "webdev.cislabs.uncw.edu";
$username =     "edm2282";
$password =     "MRVI30RA6";
$dbname =       "edm2282";
$port =         "3306";

// connection to the database
$dbhandle_2 = mysqli_connect($hostname, $username, $password, $dbname, $port)
    or die("Unable to connect to MySQL");


echo "Connected to MySQL<br>";

?>

