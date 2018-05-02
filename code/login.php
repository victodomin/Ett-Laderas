<?php


include 'database.php';
$data=new database();




$use=$_POST['user'];
$pass=$_POST['password'];
$encontrado=false;

session_start();


$result=$data->getAllUsers();

    while (($fila = mysqli_fetch_array($result))!=NULL){

        if ($use==$fila['iduser'] && $pass== $fila['password']){
            $encontrado=true;
            $_SESSION['login']=true;
            $_SESSION['nom']=$fila['iduser'];
            $_SESSION['pass']=$fila['password'];

        }

    }



if (!$encontrado){
    include 'alert.html';
   require ('index.html');
    header("refresh: 2; url=http://localhost/ett%20laderas/code/");

}else{
    header('Location: maincontent.php');
}


?>