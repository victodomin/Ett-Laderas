<?php

session_start();

$res=$_POST['oldpass'];
$pass=$_SESSION['pass'];

if(isset($_POST['ok'])){

    changePass($res,$pass);
}


function changePass($res,$pass){


include 'succsess.html';
include 'profile.php';
    header("refresh: 2; url=http://localhost/ett%20laderas/code/profile.php");

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