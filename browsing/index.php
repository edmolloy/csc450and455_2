<!DOCTYPE html>
<html lang="en">
<?php
   include('../admin/pages/session.php');
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>squarelist</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

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
                <a class="navbar-brand" href="#"><img src="./images/square.png" style="position:absolute; top:3px;left:4px;width:45px;height:45px;padding:5px;"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <style>
                            /* Style The Dropdown Button */
                            .dropbtn {
                                background-color: #222;
                                color: #9d9d9d;
                                padding: 16px;
                                font-size: 14px;
                                border: none;
                                cursor: pointer;
                            }

                            /* The container <div> - needed to position the dropdown content */
                            .dropdown {
                                position: relative;
                                display: inline-block;
                            }

                            /* Dropdown Content (Hidden by Default) */
                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #f9f9f9;
                                min-width: 160px;
                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                                z-index: 1;
                            }

                            /* Links inside the dropdown */
                            .dropdown-content a {
                                color: black;
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;
                            }

                            /* Change color of dropdown links on hover */
                            .dropdown-content a:hover {background-color: #f1f1f1}

                            /* Show the dropdown menu on hover */
                            .dropdown:hover .dropdown-content {
                                display: block;
                            }

                            /* Change the background color of the dropdown button when the dropdown content is shown */
                            .dropdown:hover .dropbtn {
                                background-color: #4d84b6;
                                color: white;

                            }
                        </style>

                        <div class="dropdown" style="position:relative;float:left;color:#FFFFFF;top:-1px;">
                            &nbsp
                            &nbsp
                            <a href="../browsing/index.php">
                            <button class="dropbtn">Browse</button>
                            </a>

                        </div>

                        <div class="dropdown">
                            <button class="dropbtn">Categories</button>
                            <div class="dropdown-content">
                                <a href="#">Electronics</a>
                                <a href="#">Clothing/Accessories</a>
                                <a href="#">Home &amp; Garden</a>
                                <a href="#">Cars/Trucks</a>
                                <a href="#">Toys &amp; Entertainment</a>
                                <a href="#">Miscellaneous</a>
                            </div>
                        </div>
                        <div class="dropdown">
                                <button class="dropbtn">Saved Searches</button>

                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Sell</button>

                        </div>

                        <div class="dropdown">
                            <button class="dropbtn">Matches</button>
                                <img src="../images/notify.png" style="position:relative;color:#FFFFFF;top:-3px;left:-20px;height:13px;width:13px;">
                            <p style="position:relative;float:right;left:-30px;top:15px;font-size:10px;color: snow;"><b>3</b></p>

                        </div>

                    </li>

                </ul>

                <div style="position:relative;float:right;color:#FFFFFF;top:15px;">
                    <a href = "../admin/pages/logout.php" style="position:relative;float:right;color:#D3D3D3;top:-6px;right:-6px;padding:6px;">Sign Out</a>
                </div>

                <div class="dropdown" style="position:relative;float:right;color:#FFFFFF;top:-3px;">
                    <button class="dropbtn">:::</button>
                    <div class="dropdown-content">
                        <a href="../review/index.php">Account Info</a>
                        <a href="../review/index.php">Preferences</a>
                        <a href="../review/index.php">Notifications</a>
                        <a href="../review/index.php">Security</a>
                        <a href="../review/index.php">My Items</a>
                        <a href="../review/index.php">Deactivate</a>
                    </div>
                </div>

                <div style="position:relative;float:right;color:#FFFFFF;top:15px;">
                    <?php echo "Hello <b>{$_SESSION['login_user']}</b>"; ?>
                    &nbsp

                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="../review/index.php">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="../review/index.php">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
