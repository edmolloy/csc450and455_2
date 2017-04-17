<?php
/**
 * Created by PhpStorm.
 * User: elijahmolloy
 * Date: 4/5/17
 * Time: 5:17 PM
 */

/*
 * This class will serve as the sign-up page. It will perform various function to check if certain
 * client parameters are met.
 *
 * i.e. unique username, unique email, password is enough length, etc.
 */


class sign_up {

    var $username;
    var $password;

    function __construct() {
        $this->load_page();
    }


    function load_page() {
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>SquareList Login</title>

            <!-- Bootstrap Core CSS -->
            <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- MetisMenu CSS -->
            <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" name="first_name" type="text" value="Elijah" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" name="last_name" type="text" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirm E-mail" name="email" type="email" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="Confirm Password" name="password" type="password" value="">
                                    </div>

                                    <!-- Change this to a button or input when using this as a form -->
                                    <a href="index.html" class="btn btn-lg btn-success btn-block">Create Account</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

        </body>

        </html>

        <?php
    }
}

new sign_up();