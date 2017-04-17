<?php
/**
 * Created by PhpStorm.
 * User: elijahmolloy
 * Date: 4/2/17
 * Time: 8:47 PM
 */


class spec_listing {

    var $conn;      // mysqli_connect

    var $dbhost;    // host url address
    var $dbuser;    // username for DB access
    var $dbpass;    // username password for DB access
    var $dbname;    // DB name from host server

    var $id;
    var $product_name;
    var $product_description;
    var $product_type_id;
    var $unit;
    var $price_per_unit;
    var $has_product_id;
    var $list_owner;

    function __construct($dbhost, $dbuser, $dbpass, $dbname)
        /*
         *
         */
    {
        $this->dbhost = $dbhost;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->dbname = $dbname;

        $this->get_id();
    }

    function get_id()
        /*
         *
         */
    {
        $this->id = $_GET['id'];
        $this->list_owner = $_GET['name'];

        if (!$this->id)
        {
            echo "No ID passed via URL";
        }

        else {
            $this->setup_connection();
        }
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
            $this->get_id_info();
        }
    }


    function get_id_info()
        /*
         *
         */
    {
        $sql = "SELECT * FROM product WHERE product.id = '$this->id'";
        mysqli_select_db( $this->conn, $this->dbname );

        $retval = mysqli_query( $this->conn, $sql );

        if(! $retval ) {
            die('Could not get data: ' . mysqli_error( $this->conn ));
            // CODE HERE TO LOAD ERROR PAGE
        }

        else {
            $row = mysqli_fetch_assoc($retval);

            $this->product_name = $row['product_name'];
            $this->product_description = $row['product_description'];
            $this->product_type_id = $row['product_type_id'];
            $this->unit = $row['unit'];
            $this->price_per_unit = $row['price_per_unit'];
            $this->has_product_id = $row['has_product_id'];

            $this->populate_page();
        }
    }


    function populate_page()
        /*
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
         *
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

            <title>SquareList Item</title>

            <!-- Bootstrap Core CSS -->
            <link href="../css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../css/shop-item.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="#">Start Bootstrap</a>
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

            <div class="row">

                <!--        <div class="col-md-3">-->
                <!--            <p class="lead">Shop Name</p>-->
                <!--            <div class="list-group">-->
                <!--                <a href="#" class="list-group-item active">Category 1</a>-->
                <!--                <a href="#" class="list-group-item">Category 2</a>-->
                <!--                <a href="#" class="list-group-item">Category 3</a>-->
                <!--            </div>-->
                <!--        </div>-->

                <div class="col-md-9">

                    <?php
    }


    function populate_page_section_2()
        /*
         *
         */
    {

        echo '<div class="thumbnail">';
            echo '<img class="img-responsive" src="http://placehold.it/800x300" alt="">';
            echo '<div class="caption-full">';
                echo '<h4 class="pull-right"> ' . $this->price_per_unit . '</h4>';
                echo '<h4>' . $this->product_name . '</h4>';
                echo '<p>' . $this->list_owner . '</p>';
                echo '<p>' . $this->product_description . '</p>';
                echo '<p></p>';
                echo '<p></p>';
            echo '</div>';


    }

    function populate_page_section_3()
        /*
         *
         */
    {
        ?>

                        <div class="ratings">
                            <p class="pull-right">3 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                4.0 stars
                            </p>
                        </div>
                    </div>

                    <div class="well">

                        <div class="text-right">
                            <a class="btn btn-default">Leave a Comment</a>
                        </div>

<!--                        <hr>-->

<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                                Anonymous-->
<!--                                <span class="pull-right">10 days ago</span>-->
<!--                                <p>This product was great in terms of quality. I would definitely buy another!</p>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <hr>-->

<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                                Anonymous-->
<!--                                <span class="pull-right">12 days ago</span>-->
<!--                                <p>I've alredy ordered another one!</p>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <hr>-->

<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star-empty"></span>-->
<!--                                Anonymous-->
<!--                                <span class="pull-right">15 days ago</span>-->
<!--                                <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>-->
<!--                            </div>-->
<!--                        </div>-->

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container -->

        <div class="container">

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; SquareSpace.org 2017</p>
                    </div>
                </div>
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


$dbhost = "squarelist.org:3306";
$dbuser = "square_admin";
$dbpass = "square_admin";
$dbname = "squarelist_new_updated";


new spec_listing($dbhost, $dbuser, $dbpass, $dbname);

?>
