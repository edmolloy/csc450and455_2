<?php

// This is a class for a listing page.
// The constructor will determine which product category to pull information from.

class listing_from_category {


    var $dbhost;    // host url address
    var $dbuser;    // username for DB access
    var $dbpass;    // username password for DB access
    var $dbname;    // DB name from host server

    var $category_type_number;  // The numerical variable for the category type
    var $category_type_name;    // The name variable for the category type

    var $number_table_rows;     // Number of total listing in this listing category

    var $conn;

    var $listing_owner;


    function __construct($dbhost, $dbuser, $dbpass, $dbname, $category_type_number)
    // This function will accept all class variables and set up a listing page depending upon which
    // variables are passed in as a parameter.
    {
        $this->dbhost = $dbhost;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->dbname = $dbname;
        $this->category_type_number = $category_type_number;

        $this->setup_connection();
    }


    function setup_connection() {
        /*
         * This function will set-up a connection to the database using class variables.
         *
         * If no connection can be made to the databae, an error page will be loaded.
         *
         * Else if a connection is made successfully, continue loading specific items from listing category.
         */

        $this->conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass);

        if(! $this->conn ) {
            die('Could not connect: ' . mysqli_error($this->conn));
            // CODE HERE TO LOAD ERROR PAGE
        }

        else {
            $this->get_category_type_name();
        }
    }


    function get_category_type_name()
    {
        $sql = "SELECT type_name FROM product_type WHERE product_type.id = '$this->category_type_number'";
        mysqli_select_db( $this->conn, $this->dbname );

        $retval = mysqli_query( $this->conn, $sql );

        if(! $retval ) {
            die('Could not get data: ' . mysqli_error( $this->conn ));
            // CODE HERE TO LOAD ERROR PAGE
        }

        else {
            $this->number_table_rows = mysqli_num_rows($retval);
            $row = mysqli_fetch_assoc($retval);
            $this->category_type_name = $row['type_name'];

            $this->populate_page();
        }
    }


    function populate_page()
        /*
         * This method will call functions that load all sections of the web page.
         *
         */
    {
        $this->populate_page_section_1();
        $this->populate_page_section_2();
        $this->populate_page_section_3();
        mysqli_close($this->conn);
    }


    function populate_page_section_1()
        /*
         * This function will load the first section of the webpage.
         * This section will mostly consist of HTML tags that do NOT vary
         * from page to page.
         */
    {
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>SquareList Products</title>

            <!-- Bootstrap Core CSS -->
            <link href="../css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../css/3-col-portfolio.css" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SquareList</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <?php
    }


    function populate_page_section_2()
        /*
         * This function will load and setup code that displays item category specific listings.
         *
         * This section is a combination of PHP and HTML, which is why it gets its own section.
         */
    {
        echo '<!-- Page Header -->';
            echo '<div class="row">';
                echo '<div class="col-lg-12">';
                    echo '<h1 class="page-header">'. $this->category_type_name . '<small>' . ' / Total Listings : ' . $this->number_table_rows .'</small>' . '</h1>';
                echo '</div>';
            echo '</div>';
        echo '<!-- /.row -->';


        $sql = "SELECT * from product where product.product_type_id = '$this->category_type_number'";
        mysqli_select_db( $this->conn, $this->dbname );

        $retval = mysqli_query( $this->conn, $sql );

        $number_rows = floor($this->number_table_rows / 3);
        $remainder = $this->number_table_rows % 3;

        $row = mysqli_fetch_assoc($retval);


        if ($number_rows >= 1) {

            for ($i = 0; $i < $number_rows; $i++) {

                echo '<div class="row">';

                for ($j = 0; $j < 3; $j++) {

                    $temp_id = $row['id'];
                    $temp_product_name = $row['product_name'];
                    $temp_product_description = $row['product_description'];

                    $sql2 = "SELECT client.first_name, client.last_name FROM client, product, has WHERE 
                              '$temp_id' = has.product_id AND has.client_id = client.id";
                    $retval2 = mysqli_query( $this->conn, $sql2 );
                    $row2 = mysqli_fetch_assoc($retval2);

                    $client_name = $row2['first_name'] . ' ' . $row2['last_name'];


                    echo '<div class="col-md-4 portfolio-item">';
                        echo '<a href="spec_listing.php?id='.$temp_id.'&name='.$client_name.'">';
                            echo '<img class="img-responsive" src="http://placehold.it/700x400" alt="">';
                        echo '</a>';
                        echo '<h3>';
                            echo '<a href="spec_listing.php?id='.$temp_id.'&name='.$client_name.'">' . $temp_product_name . '</a>';
                        echo '</h3>';
                            echo '<p>' . $client_name . '</p>';
                            echo '<p>' . $temp_product_description . '</p>';
                    echo '</div>';
                }

                echo '</div>';
            }
        }

        if ($remainder >= 1) {

            echo '<div class="row">';

            for ($j = 0; $j < $remainder; $j++) {

                $temp_id = $row['id'];
                $temp_product_name = $row['product_name'];
                $temp_product_description = $row['product_description'];

                $sql2 = "SELECT client.first_name, client.last_name FROM client, product, has WHERE 
                              '$temp_id' = has.product_id AND has.client_id = client.id";
                $retval2 = mysqli_query( $this->conn, $sql2 );
                $row2 = mysqli_fetch_assoc($retval2);

                $client_name = $row2['first_name'] . ' ' . $row2['last_name'];

                echo '<div class="col-md-4 portfolio-item">';
                    echo '<a href="spec_listing.php?id='.$temp_id.'&name='.$client_name.'">';
                        echo '<img class="img-responsive" src="http://placehold.it/700x400" alt="">';
                    echo '</a>';
                    echo '<h3>';
                        echo '<a href="spec_listing.php?id='.$temp_id.'&name='.$client_name.'">' . $temp_product_name . '</a>';
                    echo '</h3>';
                    echo '<p>' . $client_name . '</p>';
                    echo '<p>' . $temp_product_description . '</p>';
                echo '</div>';
            }

            echo '</div>';
        }
    }


    function populate_page_section_3()
        /*
         * This section of code will end the webpage. It is standard HTML similar to first page section.
         */
    {
        ?>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                <p>Copyright &copy; SquareList.org 2017</p>
                </div>
            </div>
        <!-- /.row -->
        </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

    </body>

    </html>

    <?php
    }
}

?>

<?php


$dbhost = "squarelist.org:3306";
$dbuser = "square_admin";
$dbpass = "square_admin";
$dbname = "squarelist_new_updated";


new listing_from_category($dbhost, $dbuser, $dbpass, $dbname, 6);


?>