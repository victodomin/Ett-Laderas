<?php
$db= mysqli_connect("localhost","root","","ett_laderas");


$use=$_POST['user'];
$pass=$_POST['password'];
$encontrado=false;


$result=mysqli_query($db,"select *from users ");
while (($fila = mysqli_fetch_array($result))!=NULL){

    if ($use==$fila['iduser'] && $pass== $fila['password']) $encontrado=true;


}

if (!$encontrado){
    include 'alert.html';
   require ('index.html');
    header("refresh: 2; url=http://localhost/ett%20laderas/code/");

}else{
    echo "hola";
}


?>