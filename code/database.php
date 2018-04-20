<?php

$db= mysqli_connect("localhost","root","","ett_laderas");


$res=$_POST['oldpass'];
$uss=$_POST['nam'];
$nres=$_POST['newpass'];



if(isset($_POST['ok'])){

    changePass($res,$db,$uss,$nres);
}


function changePass($res,$db,$uss,$nres)
{


    $result = mysqli_query($db, "select *from users ");
    $encontrado = false;

    while (($fila = mysqli_fetch_array($result)) != NULL && !$encontrado ) {

        if ($uss == $fila['iduser'] && $res == $fila['password'] && $nres!=null) {
            $encontrado = true;
            mysqli_query($db, "update users set users.password='$nres' where users.iduser='$uss'");
            include 'succsess.html';
            include 'profile.php';
            header("refresh: 2; url=http://localhost/ett%20laderas/code/profile.php");

        } else {
            include 'alert.html';
            include 'profile.php';
            header("refresh: 2; url=http://localhost/ett%20laderas/code/profile.php");


        }

    }
}

/*if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'insert':
            insert();
            break;
        case 'select':
            select();
            break;
    }
}
*/
?>