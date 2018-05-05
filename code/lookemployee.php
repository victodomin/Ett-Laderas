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
            <div class="container">


                   <div class="row" style="background-color: lightcyan" >

                        <div class="col-lg-12" style="margin-bottom: 50px">
                               <?php
                               $emp = $_POST['search'];

                               $data = new database();
                               $employee = $data->findEmployee($emp);
                               if( $employee!=null){


                                   echo "Name:".$employee->getName()."     ";
                                   echo "Surname:".$employee->getSurname()."    ";
                                   echo "DNI:".$employee->getDni()."    ";
                                   echo "Account:".$employee->getAccount()."    ";
                                   echo "SS:".$employee->getSS()."         ";
                                   echo "Email:".$employee->getEmail()."         ";
                                   echo "Address:".$employee->getAddress()."     ";

                               }else {
                                   echo"no data found";
                                   }
                                   
                                  ?>

                        </div>

                     </div>



            </div>
        </div>


    </div>
</div>



</body>
</html>