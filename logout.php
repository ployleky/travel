<?php

session_start();
session_destroy();

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Logout</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Logout</h1>
                <hr>
                <div class="alert alert-success">Logout success.</div>
                <a class="btn btn-default" href="signin.php">Sign in</a>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div> <!-- /container -->
  </body>
</html>
