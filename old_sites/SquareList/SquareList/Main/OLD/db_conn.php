<?php
/**
 * Created by PhpStorm.
 * User: elijahmolloy
 * Date: 3/29/17
 * Time: 9:43 AM
 */

$dbhost = "squarelist.org:3306";
$dbuser = "square_admin";
$dbpass = "square_admin";
$dbname = "squarelist_new_updated";


   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
   }


   $sql = 'SELECT * FROM product';
   mysqli_select_db($conn, 'squarelist_new_updated');
   $retval = mysqli_query( $conn, $sql );


   $number_rows = mysqli_num_rows($retval);
   echo "$number_rows<br/><br/>";


   if(! $retval ) {
       die('Could not get data: ' . mysqli_error( $conn ));
   }


   while($row = mysqli_fetch_assoc($retval)) {

       $temp_id = $row['id'];
       $temp_product_name = $row['product_name'];
       $temp_product_description = $row['product_description'];
       $temp_product_type_id = $row['product_type_id'];

       echo "$temp_id <br/>";
       echo "$temp_product_name <br/>";
       echo "$temp_product_description <br/>";
       echo "$temp_product_type_id <br/>";
       echo "<br/>";
   }

   for ($i = 0; $i < 3; $i++)
   {
       echo "$i </br>";
   }

   echo "Fetched data successfully\n";

   mysqli_close($conn);
?>