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
                <div class="row">
                    <div class="col-lg-12">
                        <h1>change password</h1>
                        <form class="form" method="post" action=database.php>
                            Nametag:<br>
                            <input type="text" name="nam">
                            <br>
                            Old password:<br>
                            <input type="text" name="oldpass">
                            <br>
                            New password<br>
                            <input type="text" name="newpass">
                            <br><br>
                            <input type="submit" value="CONFIRM" name="ok" >
                        </form>
                    </div>


                </div>
            </div>
        </div>


    </div>
</div>



</body>
</html>