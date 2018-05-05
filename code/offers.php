<?php

session_start();
include  'database.php';
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
                <?php
                  $data=new database();

                $offers= $data->showAllOffers();
                if($offers!=null) {


                    foreach ($offers as $value) {
                        echo  "idoffer:".$value['idoffer']." ";
                        echo  "idclient:".$value['idclient']." ";
                        echo  "sector:".$value['sector']." ";
                        echo  "duration:".$value['duration']." ";
                        echo  "salary:".$value['salary']." </br>";
                        echo  "description:".$value['description']." </br>";
                        echo"------------------------------------------------------------</br>";

                    }
                }else echo" no job offers ";



                ?>

            </div>
        </div>


    </div>
</div>

</body>
</html>



