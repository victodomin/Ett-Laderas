<?php

session_start();
include 'database.php';
include 'actionempolyee.php';

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
            <div class="container">


                   <div class="row" style="background-color: lightcyan" >

                        <div class="col-lg-12" style="margin-bottom: 50px">
                               <?php
                                  $emp = $_POST['search'];
                                  if($emp!=null) {

                                       $data = new database();
                                       $employee = $data->findEmployee($emp);

                                            if($employee){
                                                          echo $employee->getName()." ";
                                                          echo $employee->getSurname()." ";
                                                          echo $employee->getDni()." ";
                                                          echo $employee->getAccount()." ";
                                                          echo $employee->getSS()." ";
                                                          echo $employee->getEmail()." ";
                                                          echo $employee->getAddress()." ";

                                                    }else echo" no data found";
                                  }else header('Location: viewemployee.php');

                                  ?>

                        </div>
                        <div class="row" style="margin-top: 25px" style="" >

                           <div class="col-lg-3">
                               <form method="post">
                                   <button class="btn-primary" type="submit" style="background-color: grey">Add to an offer</button>

                               </form>
                           </div>
                            <div class="col-lg-9" style="text-align: left">
                                <?php
                                $offers= $data->showAllOffers();
                                if($offers!=null) {

                                    foreach ($offers as $value) {
                                        echo  $value['idoffer']." ";
                                        echo  $value['idclient']." ";
                                        echo  $value['sector']." ";
                                        echo  $value['duration']." ";
                                        echo  $value['salary']." ";
                                        echo  $value['description']." </br>";

                                    }
                                }else echo" no job offers to apply";

                                ?>
                            </div>




                       </div>;
                       <div class="row" style="margin-top: 30px">

                           <div class="col-lg-12">
                               <form method="post">
                                   <button class="btn-primary" type="submit" style="background-color: grey" >Make a payment</button>
                               </form>
                           </div>
                       </div>


                     </div>



            </div>
        </div>


    </div>
</div>



</body>
</html>