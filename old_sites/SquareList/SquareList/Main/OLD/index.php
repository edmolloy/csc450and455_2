<?php
/**
 * Created by PhpStorm.
 * User: elijahmolloy
 * Date: 4/5/17
 * Time: 5:01 PM
 */



/*
 * This class will construct HTML mark up of a selected category of products.
 */


class index {

    var $dbhost;    // host url address
    var $dbuser;    // username for DB access
    var $dbpass;    // username password for DB access
    var $dbname;    // DB name from host server

    var $conn;       // mysql_connection

    var $category_type_number;  // The numerical variable for the category type
    var $category_type_name;    // The name variable for the category type

    var $number_table_rows;     // Number of total listing in this listing category

    var $listing_owner;

}




?>