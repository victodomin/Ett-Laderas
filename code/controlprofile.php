<?php

include'database.php';

$res=$_POST['oldpass'];
$uss=$_POST['nam'];
$nres=$_POST['newpass'];

$prof=new database();

$prof->changePass($res,$nres,$uss);

?>