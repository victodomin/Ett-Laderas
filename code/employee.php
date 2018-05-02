<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" type="text/css" href="stylemaincontent.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container-fluid">
    <?php
    include 'mainhead.php';
    ?>


    <div class="row">
        <?php
        include 'mainmenu.php';
        ?>

        <div class="col-lg-8">
            <div class="content">
                <div class="search_container">
                    <h1> Look for an employee!!</h1>
                    <form action="lookemployee.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button class="btn" type="submit" ><i class="fa fa-search"></i><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>
        </div>


    </div>
</div>



</body>
</html>