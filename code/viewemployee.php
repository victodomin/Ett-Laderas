<?php

session_start();

include 'database.php';
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
                    <form  method="post" action="lookemployee.php" >
                        <input type="text" placeholder="Search.." name="search">
                        <button class="btn" type="submit" ><i class="fa fa-search"></i><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>
        </div>
            <div class="row">
                    <div class="col-lg-6">
                        <form  method="post" action="">
                            <input type="text" name="employee" value="ideployee" style="width: 70px">
                            <input type="text" name="cuantity" value="amount" style="width: 70px">
                            <button class="btn-primary" type="submit"  name="pay" style="background-color: grey" >Make a payment</button>

                        </form>
                    </div>
                        <div class="col-lg-6">
                            <form method="post">
                                <input type="text" name="offer" value="Idoffer" style="width: 70px ">
                                <input type="text" name="emplo" value="IDemployee" style="width: 70px ">
                                <button class="btn-primary" type="submit" style="background-color: grey">Add to an offer</button>



                            </form>

                        </div>

                <?php

                if(isset($_POST['cuantity']) && isset($_POST['employee'])){
                    $data=new database();
                    $data->AddPayment($_POST['cuantity'],$_POST['employee']);
                }
                if(isset($_POST['offer']) && isset($_POST['emplo'])){
                    $data=new database();
                    $data->AddPayment($_POST['offer'],$_POST['emplo']);
                }
                ?>
            </div>


    </div>
</div>



</body>
</html>