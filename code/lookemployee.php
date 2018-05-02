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
             <?php include 'database.php';
             $emp = $_POST['search'];
             if($emp!=null) {

                 $data = new database();
                 $employee = $data->findEmployee($emp);
                 if($employee){
                     foreach ($employee as $array ) {
                         echo $array['name'] . " ";
                         echo $array['surname'] . " ";
                         echo $array['socialsecurity'] . " ";
                         echo $array['numberaccount'] . " ";
                         echo $array['email'] . " ";
                         echo $array['residence'] . " <br>";

                     }
                 }else echo" no data found";

             }else header('Location: employee.php');

             ?>

        </div>


    </div>
</div>



</body>
</html>