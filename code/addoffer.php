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
                <h1> Add a new offer</h1>
                  <form method="post" action="controloffer.php">
                      <input type="text" name="idoffer" value="Idoffer" style="width: 70px ">
                      <input type="text" name="sector" value="sector" style="width: 70px ">
                      <input type="text" name="duration" value="duration" style="width: 70px ">
                      <input type="text" name="salary" value="salary" style="width: 70px ">
                      <input type="text" name="description" value="description" style="width: 70px ">
                      <input  type="submit" ></input>

                  </form>
            </div>
        </div>


    </div>
</div>

</body>
</html>
