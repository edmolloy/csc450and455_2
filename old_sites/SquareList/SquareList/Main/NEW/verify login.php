<?php
/**
 * Created by PhpStorm.
 * User: elijahmolloy
 * Date: 4/5/17
 * Time: 11:11 PM
 */

/*
 * This class will be called from Login.php and will be passed
 *      param:  username
 *              password
 *
 * This class will run the username and password through the login and determine if
 * the account information is authentic.
 *
 * if the account information is authentic, the user will be logged in and be re-directed
 * to the dashboard homepage.
 *
 * if the account information is not authentic, the user will be re-directed to the login screen.
 */


class verify_login {

    var $conn;      // mysqli_connect
    var $dbhost;    // host url address
    var $dbuser;    // username for DB access
    var $dbpass;    // username password for DB access
    var $dbname;    // DB name from host server

    var $username;  // parameters passed in through url
    var $password;  // parameters passed in through url


    function __construct() {
        $this->get_info();
    }


    function get_info() {
        /*
         * This function will collect username and password through url.
         * If either the username or password is null, the previous login.php
         * page will be reloaded with an error message
         */



        echo $this->username;
        echo $this->password;


        if ( ! $this->username || ! $this->password) {
            // CODE TO RELOAD SIGN-IN PAGE WITH 'ERROR' MESSAGE
        }

        else {
            echo $this->username;
            echo $this->password;

            $this->setup_page();

            // $this->connect_to_database();
        }
    }


    function setup_page()
    {
        echo $this->username;
        echo $this->password;
    }


    function connect_to_database() {
        /*
         * This function will set-up a connection to the database using class variables.
         *
         * If no connection can be made to the databae, an error page will be loaded.
         *
         * Else if a connection is made successfully, continue loading specific items from listing category.
         */

        $this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass);

        if(! $this->conn ) {
            // CODE HERE TO LOAD ERROR PAGE
        }

        else {
            $this->get_id_info();
        }
    }

}

new verify_login();