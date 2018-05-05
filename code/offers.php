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


                    foreach ($offers as $value) {?>
                       <tr>
                          <td> <?php echo  "idoffer:".$value['idoffer']." ";?></td>
                           <td><?php echo  "sector:".$value['sector']." ";?></td>
                           <td><?php echo  "duration:".$value['duration']." ";?></td>
                           <td><?php echo  "salary:".$value['salary']." </br>";?></td>
                           <td><?php echo  "description:".$value['description']?></td>

                           <td>
                               <a onclick="return confirm('Want to delete this offer?')" href="offers.php?offer=<?php echo $value['idoffer']?>"
                                  class="btn btn-danger">Delete</a></br>
                           </td>
                           <td><?php echo "---------------------------------------------------------"?></td></br>

                       </tr>

                  <?php  }
                }else echo" no job offers ";




                if (isset($_GET['offer'])){
                    $off=$_GET['offer'];
                    $dats=new database();
                    $result=$dats->deleteOffer($off);
                    if($result){
                        ?>
                        <script>
                            alert("offer successfully deleted");
                        </script>
                        <?php
                        header("refresh: 2; url=http://localhost/Ett-Laderas/code/offers.php");
                    }else {
                        ?>
                        <script>
                            alert("could not delete the offer");
                        </script>

                        <?php
                    }
                }
                ?>





            </div>

            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-alert" href="actionoffer" </a>


                </div>


            </div>
        </div>


    </div>
</div>

</body>
</html>



